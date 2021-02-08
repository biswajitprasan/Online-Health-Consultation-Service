<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <title>PATIENT INDEX</title>

  <style>
    body{
      background-color: aqua;
    }
  #containerbox{
    background-image: url(image/about_us.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    height: 100vh;
    align-content: center;
    align-items: center;
  }
  @media (min-width: 768px) {
  .navbar-brand.abs
    {
        position: absolute;
        width: 100%;
        left: 0;
        text-align: center;
    }
}
  </style>
</head>
<body>

  <!-- NAV BAR  -->
  <div class="container-fluid" style="padding: 0;">
        <nav class="navbar navbar-expand navbar-dark bg-dark">
            <div class="navbar-collapse collapse" id="collapsingNavbar">
                <ul class="navbar-nav text-light">
                  <li class="nav-item">
                      <img src="logo%20new.png" alt="" style="width: 45px; margin-left: 5px;height: auto;">
                  </li>
                  <li class="nav-item text-success">
                      <a class="nav-link" href="index.html"><img src="image/logo%20new.png" style="height: 40px; weight:40px; "><b>Online Health Consultation Service</b></a>
                  </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link disabled text-white" href="" >Hello, Subham Rout</a>
                    </li>
                    <li class="nav-item">
                        <input type="submit" onclick="location.href='patient signin.html';" value="Log Out" class="btn btn-success text-white">
                    </li>
                </ul>
            </div>
        </nav>
      </div>
  <div class="container-fluid">
  </div>
    <div class="row">
      <div class="col-sm-3" style="background-color:blue;">
      </div>
    </div>

<!-- Container Box -->
<div id="containerbox" style="background-image:url(slide image.jpg); ">
  <div class="container-fluid" >
      <div class="row">
              <div class="col-sm-3" ></div>
              <div class="col-sm-6" style="margin-top:200px;">
                  <button class="btn btn-secondary bg-primary text-white btn-lg" style="width:170px;height:50px;margin-left: 0px;" onclick="location.href='patdetails.php'">Patient Details</button>
                  <button class="btn btn-secondary bg-primary text-white btn-lg" style="margin-left: 55px;width:220px;height:50px;" onclick="location.href='appointment/index.php'">Appointment</button>
                  <button class="btn btn-secondary bg-primary text-white btn-lg" style="margin-left: 55px;width:220px;height:50px;">View Appointment</button>
              </div>
              <div class="col-sm-3" ></div>
      </div>
  </div>
  <div class="container-fluid">
      <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4" style="margin-top:100px;">
              <button class="btn btn-secondary bg-danger text-white btn-lg" style="width:200px;height:50px;margin-left: 10px;">Cancel Booking</button>
              <button class="btn btn-secondary bg-primary text-white btn-lg" style="width:170px;height:50px;margin-left: 80px;" onclick="window.open('chat/index.php')">Chat</button>
          </div>
          <div class="col-sm-4"></div>
      </div>
  </div>
</div>
</body>
</html>
