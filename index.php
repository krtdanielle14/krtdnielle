<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gocalin Blue Lagoon Resort </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/common.css">
  <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        .h-font {
            font-family: 'Merienda', cursive;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .custom-bg {
            background-color: #117566;
        }

        .custom-bg:hover {
            background-color: #199984;
        }

        .availability-form {
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

    </style>
</head>
<body class="bg-light">
 
 
 <!--Navbarrrr+login&register modal-->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
      <!-- Logo -->
      <a class="navbar-logo me-5 fw-bold fs-4 h-font" href="index.php">
          <img src="images/logo.jpg" alt="Logo" height="60" width="60">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link me-2" href="#">Rates</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link me-2" href="#">Reviews</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link me-2" href="#">Location</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link me-2" href="#">About Us</a>
              </li>
          </ul>
          <div class="d-flex">
              <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-3" data-bs-toggle="modal" data-bs-target="#LoginModal">
                  Login
              </button>
              <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
                  Register
              </button>
          </div>
      </div>
  </div>
</nav>
  <style>
    .navbar-logo {
        height: 45px; 
        width: auto; 
        margin-right: 25px;
        margin-left: 20px;
    }
</style>

<!--swiper epek-->
  <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/carouselfx/1.png" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carouselfx/2.jpg" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carouselfx/3.jpg" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carouselfx/4.jpg" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carouselfx/5.jpg" class="w-100 d-block">
        </div>
      </div>
    </div>
  </div>

  <!--checkform-->  

  <div class="container availability-form">
    <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded">
            <h5 class="mb-4">Check Resort Availability</h5>
            <form>
                <div class="row align-items-end">
                    <div class="col-lg-3">
                        <label class="form-label" style="font-weight: 500;">Check-in</label>
                        <input type="date" class="form-control shadow-none">
                    </div>
                    <div class="col-lg-3">
                        <label class="form-label" style="font-weight: 500;">Check-out</label>
                        <input type="date" class="form-control shadow-none">
                    </div>
                    <div class="col-lg-2">
                        <label class="form-label" style="font-weight: 500;">PAX</label>
                        <label>(Only Choose If Not Availing Packages)</label>
                        <select id="paxSelect" class="form-select" aria-label="Default select example">
                           <option value="0">N/A</option>
                            <option value="1-5">1-5</option>
                            <option value="6-10">6-10</option>
                            <option value="11-15">11-15</option>
                            <option value="16-20">16-20</option>
                            <option value="21-30">21-30</option>
                            <option value="40+">40+ persons</option>
                        </select>
                    </div>

                    <div class="col-lg-2">
                        <label class="form-label" style="font-weight: 500;">Packages</label>
                        <select id="packagesSelect" class="form-select" aria-label="Default select example">
                            <option value="0">N/A</option>
                            <option value="20-30">Package A</option>
                            <option value="40-70">Package B</option>
                        </select>
                    </div>
                    <div class="col-lg-2 text-end">
                        <button type="submit" class="btn text-white shadow-none custom-bg"
                            style="width: 110px; height: 45px; font-size: 20px;">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<!--Our Resort-->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Resort Packages</h2>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-4 col-md-6 mb-4">

      <div class="card border-0 shadow" style="max-width: 350px; width: 100%;">
        <img src="images/packages/1.png" class="card-img-top">

        <div class="card-body">
          <h5>Package A (20-30 PAX)</h5>
          <h6 class="mb-4">₱10,000</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
              1 Pool For Adult
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
              1 Pool For Kids
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
              2 Kubo
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
              Access to Function Hall
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
              1 A.C Room
            </span>
          </div>
          
          <a href="#" class="btn btn-custom-primary">Full Inclusion Details</a>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card border-0 shadow" style="max-width: 350px; width: 100%;">
        <img src="images/packages/2.png" class="card-img-top">
  
        <div class="card-body">
          <h5>Package B (40-70 PAX)</h5>
          <h6 class="mb-4">₱13,000</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
              1 Pool For Adult
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
              1 Pool For Kids
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
              2 Kubo
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
              Access to Function Hall
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
              1 A.C Room
            </span>
          </div>
          
          <a href="#" class="btn btn-custom-primary">Full Inclusion Details</a>
        </div>
      </div>
    </div>
  </div>

  
</div>





<br><br><br>
<br><br><br>


  <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-circle fs-3 me-2"></i> Login
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control shadow-none">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control shadow-none">
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <button type="submit" class="btn-dark shadow-none">Login</button>
                        <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>

<!--modalforms-->
  <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                    <i class="bi bi-person-fill-add fs-3 me-2"></i>
                     User Registration
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                 <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                  Note: Please Match The Details With Your Valid ID
                </span>
                <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control shadow-none">
                  </div>
                  <div class="col-md-6 p-0">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control shadow-none">
                </div>
                <div class="col-md-12 ps-0 mb-3">
                  <label class="form-label">Contact Number</label>
                  <input type="number" class="form-control shadow-none align-items-center">
                  </div>
                  <div class="col-md-12 ps-0 mb-3">
                  <label class="form-label">Address</label>
                  <textarea class="form-control shadow-none " rows="1"></textarea>
                  </div>
                  <div class="col-md-6 p-2">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-2">
                  <label class="form-label">Confirm Password</label>
                  <input type="password" class="form-control shadow-none">
                </div>
                </div>
                <div class="text-center my-1">
                  <button type="submit" class="btn-dark shadow-none">Register</button>

  </div>








  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop:true,
      autoplay: {
        delay:3500,
        disableOnInteraction: false
      }
    });
  </script>

</body>
</html>
