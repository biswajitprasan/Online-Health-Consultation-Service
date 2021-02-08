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
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <title>View Patient Portal</title>

  <style>
  @media (min-width: 768px) {
  .navbar-brand.abs
    {
        position: absolute;
        width: 100%;
        left: 0;
        text-align: center;
    }
}

    input{
      width: 40%;
      height: 5%;
      border: 1px;
      border-radius: 05px;
      padding: 8px 15px 8px 18px;
      box-shadow: 1px 1px 2px 1px grey;
    }

    .formbox{
      margin-left : 200px;
      margin-right: 200px;
    }
  </style>
</head>
<body>

  <!-- NAV BAR  -->
  <div class="container-fluid" style="padding: 0; background: #333945;">
        <nav class="navbar navbar-expand navbar-dark">
            <div class="navbar-collapse collapse" id="collapsingNavbar">
                <ul class="navbar-nav text-light">
                  <li class="nav-item">
                      <img src="logo%20new.png" alt="" style="width: 45px; margin-left: 5px;height: auto;">
                  </li>
                  <li class="nav-item text-success">
                      <a class="nav-link text-white" href="index.html"><img src="image/logo%20new.png" height="40" width="40"><b>Online Health Consultation Service</b></a>
                  </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="adminportal.html"><img src="image/back.png" height="30" width="30"></a>
                    </li>
                </ul>
            </div>
        </nav>
      </div>
 
<!-- Container Box -->
<div class="container-fluid">
  <div class="container-fluid"  style="height: 2rem;">
    <p class="text-dark font-weight-bold"><h3>View Patient Details</h3></p>
  </div>
  <center>
    <form action="" method="POST" class="searchbar">
      <input type="text" name="id" placeholder="Enter Patient ID"><br><br>
      <input type="submit" name="search" value="VIEW" class="btn btn-primary">
    </form>
  </center>
  
  <?php  
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,'health');

  if(isset($_POST['search']))
  {
    $id = $_POST['id'];

    $query = "SELECT * FROM patient where id='$id'"; 
    $query_run = mysqli_query($connection,$query);

    while ($row = mysqli_fetch_array($query_run)) 
    {
      ?>

      <form action="" method="POST" class="formbox">
    <div class="form-group">
    <label for="id">Patient ID</label>
    <input type="text" class="form-control" id="" name="id" value="<?php echo $row['id'] ?>" readonly>
  </div>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="" name="name" value="<?php echo $row['name'] ?>" readonly >
  </div>
  <div class="form-group">
    <label for="email">E- Mail</label>
    <input type="text" class="form-control" id="" name="email" value="<?php echo $row['email'] ?>" readonly>
    
  </div>
  <div class="form-group">
    <label for="phno">Contact No</label>
    <input type="text" class="form-control" id="" name="ph_no" value="<?php echo $row['ph_no'] ?>" readonly>
    
  </div>
  <div class="form-group">
    <label for="gender">Gender</label>
    <input type="text" class="form-control" id="" name="gender" value="<?php echo $row['gender'] ?>" readonly>
    
  </div>
  <!-- <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="">
    
  </div> -->
  <!-- <input type="submit" name="" value="Submit" class="btn btn-outline-primary submit"> -->
  <a href="adminpatedit.php" class="font-weight-bold">Edit Patient Details</a>
</form>

      <?php

    }

  }

  ?>


</div>

</body>
</html>
