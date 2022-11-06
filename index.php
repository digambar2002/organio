<?php
  include 'config.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title><?php echo STORE_NAME ?></title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <!-- Boxi icons -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!-- MDB -->
  <link rel="stylesheet" href="assets/mdb/css/mdb.min.css" />
  <link rel="stylesheet" href="assets/css/colors.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body style="padding-top: 70px;">
  <section>
    <nav class="navbar navbar-light bg-light fixed-top">
      <div class="container-fluid">
        <a class="brand"><?php echo STORE_NAME ?></a>
        <div class="dropdown">
          <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar"
            role="button" data-mdb-toggle="dropdown" aria-expanded="false">
            <img src="assets/img/avtar.webp" class="rounded-circle" height="25"
              alt="Black and White Portrait of a Man" loading="lazy" />
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
            <li>
              <a class="dropdown-item" href="#">My profile</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Settings</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Logout</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="container-fluid p-2 mt-2">
        <form class="d-flex input-group">
          <input type="search" class="form-control sm" placeholder="Search ..." aria-label="Search" />
          <button class="btn bg-primary" type="button" data-mdb-ripple-color="dark">
            <i class="fas fa-search text-light"></i>
          </button>
        </form>
      </div>
    </nav>
  </section>
  <section class="products mb-4">

    <h5 class="mt-4 mb-2">Our Products</h5>

    <div class="pl-2 pr-2">
      <div class="row">
        <div class="col-6 p-1">
          <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="https://m.media-amazon.com/images/I/61BVMXL2MML._SX679_.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body p-2">
              <div>
                <div class="d-flex justify-content-between">
                  <p class="m-0"> <strong>Hidrogen Gas</strong></p>
                  <div>
                    <i class="fa-regular fa-heart" style="font-size: 24px;"></i>
                  </div>
                </div>

                <small>This is the best and...</small>
                <h5 class="card-title"> <span style="text-decoration:line-through ;">500</span> <strong> $ 200
                  </strong>
                </h5>
              </div>

            </div>
          </div>
        </div>
        <div class="col-6 p-1">
          <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="https://m.media-amazon.com/images/I/61BVMXL2MML._SX679_.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body p-2">
              <div>
                <div class="d-flex justify-content-between">
                  <p class="m-0"> <strong>Hidrogen Gas</strong></p>
                  <div>
                    <i class="fa-regular fa-heart" style="font-size: 24px;"></i>
                  </div>
                </div>

                <small>This is the best and...</small>
                <h5 class="card-title"> <span style="text-decoration:line-through ;">500</span> <strong> $ 200
                  </strong>
                </h5>
              </div>

            </div>
          </div>
        </div>
        <div class="col-6 p-1">
          <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="https://m.media-amazon.com/images/I/61BVMXL2MML._SX679_.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body p-2">
              <div>
                <div class="d-flex justify-content-between">
                  <p class="m-0"> <strong>Hidrogen Gas</strong></p>
                  <div>
                    <i class="fa-regular fa-heart" style="font-size: 24px;"></i>
                  </div>
                </div>

                <small>This is the best and...</small>
                <h5 class="card-title"> <span style="text-decoration:line-through ;">500</span> <strong> $ 200
                  </strong>
                </h5>
              </div>

            </div>
          </div>
        </div>
        <div class="col-6 p-1">
          <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="https://m.media-amazon.com/images/I/61BVMXL2MML._SX679_.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body p-2">
              <div>
                <div class="d-flex justify-content-between">
                  <p class="m-0"> <strong>Hidrogen Gas</strong></p>
                  <div>
                    <i class="fa-regular fa-heart" style="font-size: 24px;"></i>
                  </div>
                </div>

                <small>This is the best and...</small>
                <h5 class="card-title"> <span style="text-decoration:line-through ;">500</span> <strong> $ 200
                  </strong>
                </h5>
              </div>

            </div>
          </div>
        </div>
        <div class="col-6 p-1">
          <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="https://m.media-amazon.com/images/I/61BVMXL2MML._SX679_.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body p-2">
              <div>
                <div class="d-flex justify-content-between">
                  <p class="m-0"> <strong>Hidrogen Gas</strong></p>
                  <div>
                    <i class="fa-regular fa-heart" style="font-size: 24px;"></i>
                  </div>
                </div>

                <small>This is the best and...</small>
                <h5 class="card-title"> <span style="text-decoration:line-through ;">500</span> <strong> $ 200
                  </strong>
                </h5>
              </div>

            </div>
          </div>
        </div>
        <div class="col-6 p-1">
          <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="https://m.media-amazon.com/images/I/61BVMXL2MML._SX679_.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body p-2">
              <div>
                <div class="d-flex justify-content-between">
                  <p class="m-0"> <strong>Hidrogen Gas</strong></p>
                  <div>
                    <i class="fa-regular fa-heart" style="font-size: 24px;"></i>
                  </div>
                </div>

                <small>This is the best and...</small>
                <h5 class="card-title"> <span style="text-decoration:line-through ;">500</span> <strong> $ 200
                  </strong>
                </h5>
              </div>

            </div>
          </div>
        </div>


      </div>
    </div>

  </section>
  <section>
    <nav class="navbar navbar-light bg-light shade fixed-bottom">
      <div class="container-fluid">
        <a href="index.html">
          <div class="bottom-icon ripple bottom-icon-active">
            <i class='bx bx-home-alt'></i>
          </div>
        </a>
        <a href="pages/category.html">
          <div class="bottom-icon ripple ">
            <i class='bx bx-category-alt'></i>
          </div>
        </a>
        <a href="pages/notification.html">
          <div class="bottom-icon ripple ">
            <i class='bx bx-bell'></i>
            <span class="badge bg-danger badge-dot"></span>
          </div>
        </a>
        <div class="bottom-icon ripple ">
          <i class='bx bx-user-circle'></i>
        </div>
        <a href="pages/cart.html">
          <div class="bottom-icon ripple ">
            <i class='bx bx-cart'></i>
            <span class="badge bg-danger badge-dot"></span>
          </div>
        </a>
      </div>
    </nav>
  </section>


  <!-- MDB -->
  <script type="text/javascript" src="assets/mdb/js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>

</html>