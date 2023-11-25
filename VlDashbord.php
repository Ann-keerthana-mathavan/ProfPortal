<!DOCTYPE html>
<html lang="en">

<head>
  <title>Vl dashboard</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- boostrap cdn-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" />

  <!-- poppin google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet" />
  <!-- font awsome icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- custem css -->
  <link rel="stylesheet" href="./css/VlDashbord.css" />
</head>

<body>
  <?php
  include "./includes/header.php";
  ?>
  <div class="content">
    <div class="container">
      <div class="title-div">
        <div class="row d-flex align-items-center justify-content-start">
          <div class="col-md-1">
            <button class="btn-back">
              <a href="#"><img src="./img/back btn icon.png" class="img-fluid" alt="" /></a>
            </button>
          </div>
          <div class="col-md-11">
            <p class="title-text">
              let's complete tasks <br />at your fingertips
            </p>
          </div>
        </div>
      </div>
      <!-- tasks cards start -->
      <div class="row mb-5 d-flex align-items-stretch justify-content-start flex-grow-1">
        <div class="col-lg-4">
          <!-- personal time table  -->
          <div class="card mt-5 text-center mx-5 task-card">
            <div class="card-img">
              <img class="img-fluid card-img" src="./img/timetable icon.png" alt="" />
            </div>
            <div class="card-body">
              <p class="card-sub-text">
                view personal <br />
                time table & request <br />
                time slots.
              </p>
              <p class="nav-link">
                <a class="nav-link" href="./personalTimeTable.php">click here</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <!-- update logs -->
          <div class="card mt-5 text-center mx-5 task-card">
            <div class="card-img">
              <img class="img-fluid card-img" src="./img/update log icon.png" alt="" />
            </div>
            <div class="card-body">
              <p class="card-sub-text">
                update logs for <br />
                each class <br />
                <br />
              </p>
              <p class="nav-link">
                <a class="nav-link" href="#update logs">click here</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <!-- update voucher -->
          <div class="card mt-5 text-center mx-5 task-card">
            <div class="card-img">
              <img class="img-fluid card-img" src="./img/update payment voucher icon.png" alt="" />
            </div>
            <div class="card-body">
              <div class="card-sub-text">
                update payment <br />
                vocher details <br />
                <br />
              </div>
              <div class="nav-link">
                <a class="nav-link" href="#update voucher">click here</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- tasks cards end -->
    </div>
  </div>
  <?php
  include "./includes/footer.php";
  ?>

</body>
<!-- boostrap js bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</html>