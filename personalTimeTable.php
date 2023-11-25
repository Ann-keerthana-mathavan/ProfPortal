<!DOCTYPE html>
<html lang="en">

<head>
  <title>personal time table</title>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <!-- custem css -->
  <link rel="stylesheet" href="./css/personalTimeTable.css" />

  <!-- jquary cdn for calender -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <!-- custom js  -->
  <script src="./js/calander.js"></script>
</head>

<body>
  <?php
  include "./includes/header.php";
  ?>
  <div class="content">
    <div class="container">
      <div class="title-div">
        <div class="row d-flex align-items-center justify-content-start">
          <div class="col-lg-1">
            <button class="btn-back">
              <a href="./VlDashbord.php">
                <img src="./img/back btn icon.png" class="img-fluid" alt="" />
              </a>
            </button>
          </div>
          <div class="col-lg-11">
            <p class="title-text">personal time table</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <!-- personal time table start -->

          <div class="table-responsive">
            <table class="table text-center table-hover table-bordered table-striped">
              <thead>
                <tr class="table-primary">
                  <th scope="col">time</th>
                  <th scope="col">monday</th>
                  <th scope="col">tuesday</th>
                  <th scope="col">wednesday</th>
                  <th scope="col">thurseday</th>
                  <th scope="col">friday</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">8.30 - 9.30</th>
                  <td rowspan="2">
                    HNDIT-3032 <br />
                    1st year
                  </td>
                  <td>HNDIT-3012</td>
                  <td>HNDIT-3002</td>
                  <td>HNDIT-3030</td>
                  <td>free</td>
                </tr>
                <tr>
                  <th scope="row">9.30 - 10.30</th>
                  <td>HNDIT-3012</td>
                  <td>HNDIT-3002</td>
                  <td>HNDIT-3030</td>
                  <td>free</td>
                </tr>
                <tr>
                  <th scope="row">10.30 - 11.30</th>
                  <td>HNDIT-3032</td>
                  <td>HNDIT-3012</td>
                  <td>HNDIT-3002</td>
                  <td>HNDIT-3030</td>
                  <td>free</td>
                </tr>
                <tr>
                  <th scope="row">11.30 - 12.30</th>
                  <td>HNDIT-3032</td>
                  <td>HNDIT-3012</td>
                  <td>HNDIT-3002</td>
                  <td>HNDIT-3030</td>
                  <td>free</td>
                </tr>
                <tr>
                  <th scope="row">12.30 - 1.00</th>
                  <td colspan="5" class="text-center">.....break.......</td>
                </tr>
                <tr>
                  <th scope="row">1.00 - 2.00</th>
                  <td>HNDIT-3032</td>
                  <td>HNDIT-3012</td>
                  <td>HNDIT-3002</td>
                  <td>HNDIT-3030</td>
                  <td>free</td>
                </tr>
                <tr>
                  <th scope="row">2.00 - 3.00</th>
                  <td>HNDIT-3032</td>
                  <td>HNDIT-3012</td>
                  <td>HNDIT-3002</td>
                  <td>HNDIT-3030</td>
                  <td>free</td>
                </tr>
                <tr>
                  <th scope="row">3.00 - 4.00</th>
                  <td>HNDIT-3032</td>
                  <td>HNDIT-3012</td>
                  <td>HNDIT-3002</td>
                  <td>HNDIT-3030</td>
                  <td>free</td>
                </tr>
                <tr>
                  <th scope="row">4.00 - 5.00</th>
                  <td>HNDIT-3032</td>
                  <td>HNDIT-3012</td>
                  <td>HNDIT-3002</td>
                  <td>HNDIT-3030</td>
                  <td>free</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- personal time table end -->
        </div>
        <div class="col-lg-4">
          <!-- calander start -->
          <div class="container">
            <div class="row d-flex justify-content-between align-items-center mb-3">
              <div class="col-6">
                <button class="btn btn-primary" id="prevMonth">
                  <i class="fas fa-chevron-left mx-3"></i>
                </button>
              </div>
              <div class="col-6 px-5">
                <button class="btn btn-primary mx-5" id="nextMonth">
                  <i class="fas fa-chevron-right mx-3"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="calander text-center" id="calendar-container"></div>

          <!-- calander end -->
          <div class="request mt-3 center">
            <a href="#request_time_slot" class="btn btn-primary d-block btn-request">request time slot</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  include "./includes/footer.php";
  ?>
</body>
<!-- boostrap js bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</html>