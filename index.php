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

  <?php
  include "./includes/nav_bar.php";
  include "./includes/home.php";
  include "./includes/service.php";
  include "./includes/contactUs.php";
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