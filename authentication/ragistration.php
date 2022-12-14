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

    .crab {
      height: 105vh;
      width: 100%;
      background: #000000bf;
      margin-top: -10px;
      z-index: 1;
    }
  </style>


</head>

<body>


  <div id="loading" class="crab position-absolute" hidden>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
      <div>
        <lottie-player src="https://assets3.lottiefiles.com/private_files/lf30_d7svjitp.json" mode="bounce" background="transparent" speed="2" style="width: 300px; height: 300px;" loop autoplay></lottie-player>
        <h5 class="text-center text-light">Creating Account</h5>
      </div>
      <!-- <div class="spinner-grow text-success" role="status">
        <span class="visually-hidden">Loading...</span>
      </div> -->
    </div>
  </div>

  <div id="EmailPrompt" class="crab position-absolute" hidden>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
      <div>
        <div class="d-flex justify-content-center">
          <lottie-player src="https://assets1.lottiefiles.com/private_files/lf30_pw5a608o.json" background="transparent" speed="1" style="width: 200px; height: 200px;" loop autoplay></lottie-player>
        </div>
        <h5 class="text-center text-light">Account Created Successfully</h5>
        <p class="text-center text-light">Activation mail sent on your email please verify your mail</p>
        <div style="margin: 24px;">
          <a href="index.php" class="btn bg-primary text-light btn-block" style="border-radius: 25px; height: 50px; font-size:18px">Go to login</a>
        </div>
      </div>
      <!-- <div class="spinner-grow text-success" role="status">
        <span class="visually-hidden">Loading...</span>
      </div> -->
    </div>
  </div>


  <!-- Start your project here -->
  <div id="mainContainer" class="container-fluid">


    <div class="col-12 mt-2 p-2 ml-4">
      <i class="fa-solid fa-arrow-left text-light" style="font-size: 24px;"></i>
    </div>

    <div class="row">
      <div class="col-12 mb-4">
        <div class="text-center">
          <img src="../assets/img/register_page_2.svg" style="height: 190px;" class="img-fluid" alt="Phone image">

        </div>
      </div>


      <section class="p-0">
        <div class="col-12 p-0">
          <div class="pt-4 bg-round-card ">
            <h5 class="text-center">Registration</h5>
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


                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                  <div class="col-12">


                    <div class="form-outline mb-4" style="margin-bottom: 30px !important;">
                      <input type="text" class="form-control " name="username" id="username" />
                      <label for="username" class="form-label">username</label>
                      <div id="errorUsername" class="mb-2"></div>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mt-4" style="margin-bottom: 30px !important;">
                      <input type="email" class="form-control" name="email" id="email" />
                      <label for="email" class="form-label">email</label>
                      <div id="errorEmail" class="mb-2"></div>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mt-4" style="margin-bottom: 30px !important;">
                      <input type="password" class="form-control" name="password" id="password" />
                      <label for="password" class="form-label">password</label>
                      <div id="errorPassword" class="mb-2"></div>
                    </div>


                    <!-- Submit button -->
                    <div style="margin: 24px;">
                      <button id="submitBtn" class="btn bg-primary text-light btn-block" style="border-radius: 25px; height: 50px;">Sign up</button>

                    </div>




                    <p class="text-center text-secondary">Already have an account?<a href="index.php"> Login here</a>
                    </p>



                  </div>

                </div>
              </div>
            </div>
      </section>

    </div>



  </div>
  <!-- End your project here -->

  <!-- MDB -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript" src="../assets/mdb/js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <script src="js/register.js"></script>

</body>

</html>