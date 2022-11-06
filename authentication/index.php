<?php 

include "../connection.php";

// Starting Session
session_start();

// Checking Already user login or not 
if (isset($_SESSION['user'])) {
  header("Location: success.html");
}
// checking admin login or not
else if (isset($_SESSION['admin'])) {
  header("Location: ../admin/dashboard.php");
}
// if no one is login then execute login code
else {
  $error = null;

  if (isset($_POST['login'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password =  mysqli_real_escape_string($conn, $_POST['password']);


    if (empty(trim($_POST['password'])) && empty(trim($_POST['username']))) {

      // header("Location: ../user/login.php?error=Username and Password required");
      $error = "* Username and Password required";
      // exit();
    } elseif (empty(trim($_POST['username']))) {

      $username_err = "Username cannot be blank";
      // header("Location: ../user/login.php?error=Username required");
      $error = "* Username required";
      // exit();
    } elseif (empty(trim($_POST['password']))) {

      // header("Location: ../user/login.php?error=Password required");
      $error = "* Password required";
      // exit();
    } else {

      $password = md5($password);
      $query = "SELECT * FROM accounts WHERE username= '{$username}' AND Password= '{$password}'";
      $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $vstatus = $row['vstatus'];
          $flag = $row['flag'];
          $email = $row['email'];
          $createdate = $row['createdate'];
        }


        // checking account is active or not 

        if ($vstatus == 1) {

          // checking is it admin account or user account
          if ($flag == 'admin') {
            // if user account

            session_start();
            $_SESSION['admin'] = $username;
            header("Location: ");
          } else {
            // if user account

            session_start();
            $_SESSION['user'] = $username;
            header("Location: success.html");
          }
        } else {
          $error = "Account not activated, please check your email";
        }
      } else {
        $error = " * Invalid username and password";
      }
    }
  }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="../assets/mdb/css/mdb.min.css" />
  <link rel="stylesheet" href="../assets/css/colors.css" />
  <style>
    .form-control:focus~.form-notch div {
      border-color: var(--primary-color) !important;
    }

    .form-control:focus~.form-label {
      color: var(--primary-color) !important;
    }

    body {
      background-color: var(--primary-color) !important;
      outline: none;
    }



    .bg-round-card {
      background-color: var(--white-200) !important;
      border-radius: 40px;
    }

    .rounded-card {
      border-radius: 40px 40px 0px 0px;
      background-color: #ffffff;
    }

    .icon {
      font-size: 18px;
      /* color: var(--primary-color); */
    }

    .insta {
      color: #f70388;
    }

    #mainContainer::-webkit-scrollbar {
      width: 0;
      /* Remove scrollbar space */
      background: transparent;
      /* Optional: just make scrollbar invisible */
    }
  </style>


</head>

<body>
  <!-- Start your project here -->
  <div id="mainContainer" class="container-fluid">
    <div class="row">

      <div class="col-12 mt-2 p-2 ml-4">
        <i class="fa-solid fa-arrow-left text-light" style="font-size: 24px;"></i>
      </div>

      <div class="col-12 mb-4">
        <img src="../assets/img/login_page.svg" class="img-fluid" alt="Phone image">
      </div>


      <section class="p-0">
        <div class="col-12 p-0">
          <div class="pt-4 bg-round-card ">
            <h5 class="text-center">Login to your account</h5>
            <div class="card rounded-card login-from mt-4">
              <div class="card-body">

                <div class="text-center mb-4">
                  <button type="button" class="btn btn-light btn-floating mx-1">
                    <i class="fab fa-facebook-f icon text-primary"></i>
                  </button>

                  <button type="button" class="btn btn-light btn-floating mx-1 insta">
                    <i class="fab fa-instagram icon"></i>
                  </button>

                  <button type="button" class="btn btn-light btn-floating mx-1">
                    <i class="fab fa-twitter icon text-info"></i>
                  </button>
                  <p class="text-secondary">connect with us:</p>
                </div>
                

                <p class="text-danger"><?php echo $error; ?></p>

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <input type="username"  id="username" name="username" class="form-control form-control-lg" />
                    <label class="form-label" for="username">username</label>
                  </div>

                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input type="password" id="password" name="password" class="form-control form-control-lg" />
                    <label class="form-label" for="password">Password</label>
                  </div>

                  <!-- 2 column grid layout for inline styling -->
                  <div class="row mb-4">
                    <div class="col mx-1">
                      <!-- Simple link  -->
                      <a href="#!">Forgot password?</a>
                    </div>
                  </div>

                  <!-- Submit button -->
                  <div style="margin: 24px;">
                    <button class="btn bg-primary  text-light btn-block"
                      style="border-radius: 25px; height: 50px;" name="login">Login</button>

                  </div>


                  <!-- Register buttons -->
                  <div class="text-center">
                    <p class="text-secondary">Don't have an account? <a href="ragistration.php">Register</a></p>
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>
      </section>

    </div>



  </div>
  <!-- End your project here -->

  <!-- MDB -->
  <script type="text/javascript" src="../assets/mdb/js/mdb.min.js"></script>
  <!-- Custom scripts -->
  
  <script type="text/javascript"></script>
</body>

</html>