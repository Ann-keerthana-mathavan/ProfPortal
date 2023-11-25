<!DOCTYPE html>
<html lang="en">

<head>
  <title>profportal</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <style></style>
  <!-- boostrap cdn-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" />

  <!-- poppin google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet" />
  <!-- font awsome icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- jquary script -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <!-- custem css -->
  <link rel="stylesheet" href="./css/index.css" />
</head>

<body>
  <header>
    <!-- nav bar start -->

    <nav class="navbar navbar-expand-lg bg-Clean-Blue">
      <div class="container-fluid">
        <!-- slite logo -->
        <div class="logo mx-3">
          <img src="./img/sltate_logo-NO Background.png" class="img-fluid" alt="" />
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto mb-2 mb-lg-0 justify-content-betweem">
            <!-- nav links -->
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#service">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contactus">Contact us</a>
            </li>
          </ul>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- nav bar end -->
  </header>
  <!-- home page start -->
  <section class="home pb-5 container-fluid" id="home">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 mt-3">
          <div class="container-fluid">
            <div class="welcome-text mt-5">
              <p>
                welcome to <span class="title">profportal</span>, <br />
                where lecture management <br />
                meets efficiency
              </p>
            </div>
            <div class="sub-text">
              <p>
                effortlessly handle your schedules, <br />
                timetables,vouchers,and logs with <br />
                simplicity and convenience.
              </p>
              <button class="btn btn-primary login-btn mt-3 btn--show-modal">
                sign in
              </button>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="mt-3">
            <img src="./img/landing page illustration.png" class="img-fluid" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- home page end -->
  <!-- service page start -->
  <section class="service pt-5 container" id="service">
    <div class="container-fluid mt-5">
      <div class="service-text">
        <p>what can you do here</p>
      </div>
      <!-- service cards -->
      <div class="container-fluid mt-5">
        <div class="row mt-5 mb-5 d-flex align-items-stretch justify-content-start flex-grow-1">
          <div class="col-lg-4">
            <div class="card mt-5 text-center service-card mx-5">
              <div class="card-img">
                <img class="img-fluid card-img" src="./img/manage timetable logo.png" alt="" />
              </div>
              <div class="card-body">
                <div class="card-heading">
                  <p>manage time tables</p>
                </div>
                <p class="card-sub-text">
                  you can view your time table and request empty time table
                  here
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card mt-5 text-center service-card mx-5">
              <div class="card-img">
                <img class="img-fluid card-img" src="./img/manage logs logo.png" alt="" />
              </div>
              <div class="card-body">
                <div class="card-heading">
                  <p>manage logs</p>
                </div>
                <p class="card-sub-text">you can manage subject logs here</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card mt-5 text-center service-card mx-5">
              <div class="card-img">
                <img class="img-fluid card-img" src="./img/manage vouchers logo.png" alt="" />
              </div>
              <div class="card-body">
                <div class="card-heading">
                  <p>manage vouchers</p>
                </div>
                <p class="card-sub-text">
                  you can manage vouchers and logs here
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- service page end -->
  <!-- contact us start -->
  <section class="contactUs" id="contactus">
    <div class="container">
      <div class="contact-text">
        <p>contact information</p>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <!-- contact info -->
            <div class="contact-info">
              <div class="row">
                <div class="col">
                  <!-- phone numbers -->
                  <div class="row">
                    <div class="col-1">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="col">
                      <p>
                        +94 112 691 307 <br />
                        +94 112 691 572
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <!-- address -->
                  <div class="row">
                    <div class="col-1">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="col">
                      <p>
                        320, T B jaya mawatha <br />
                        colombo, sri lanka
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- social media icons -->
              <div class="social-icons">
                <a href="https://www.facebook.com/sliate.ac.lk?mibextid=ZbWKwL">
                  <img src="./img/facebook icon.png" alt="" class="icons" />
                </a>
                <a href="https://www.linkedin.com/school/sliate/"><img src="./img/linkedin icon.png" alt="" class="icons" /></a>
                <a href="https://www.youtube.com/@SLIATEOfficial">
                  <img src="./img/youtube icon.png" class="icons" alt="" />
                </a>
                <a href="https://x.com/sliateofficial?t=P8lvrqh1D7MXnggfZ_jiOg&s=09">
                  <img src="./img/X icon.png" class="icons" alt="" />
                </a>
              </div>
              <div class="mapouter">
                <div class="gmap_canvas">
                  <iframe src="https://maps.google.com/maps?q=320,%20T%20B%20jaya%20mawatha%20%20colombo,%20sri%20lanka%20slaite&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 360px; height: 240px"></iframe>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <!-- contact us form start -->
            <div class="card contactUs-card">
              <h3 class="text-center mt-3">contact us</h3>
              <div class="card-body">
                <form action="" method="POST" class="form">
                  <!-- name -->
                  <div class="form-group mt-2">
                    <input type="text" class="form-control contactUs-input" name="name" id="name" placeholder="name" required />
                  </div>
                  <!-- email -->
                  <div class="form-group mt-3">
                    <input type="email" name="Email" class="form-control contactUs-input" placeholder="email" aria-describedby="emailHelp" required />
                    <!-- message -->
                    <div class="form-group mt-3">
                      <textarea name="message" id="" cols="30" rows="4" class="form-control contactUs-input" placeholder="message" required></textarea>
                    </div>
                    <!-- button -->
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block mt-3 d-block contactUs-btn">
                        contact us
                      </button>
                    </div>
                  </div>
                  <!-- contact us form end -->
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="copy-rigth-text">
        <p class="text-center mt-3">
          <i class="fa fa-copyright" aria-hidden="true"></i> 2023 sliate all
          rights reserved
        </p>
      </div>
    </footer>
  </section>
  <!-- contact us page end -->

  <?php
  include "./includes/login.php";
  include "./includes/resetPassword.php";
  ?>


</body>

<!-- custom js -->
<script src="./js/login.js"></script>
<script src="./js/index.js"></script>
<!-- boostrap js bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</html>