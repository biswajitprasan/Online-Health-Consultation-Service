<?php
session_start();
$host="localhost";
    $username="root";
    $password="";
    $dbname="health";
    $conn=new mysqli($host,$username,$password,$dbname);
    
    if(mysqli_connect_error())
    {
        die('connection error'.mysqli_connect_error());
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <title>Patient Details</title>
  <style media="screen">
    .bs-example {
      margin-left: 120px;
      margin-right: 120px;
    }
  </style>
</head>

<body>
  <!--  -->
  <!-- NAV BAR -->
  <!--  -->
  <nav class="navbar navbar-expand-sm bg-dark text-lg-left font-weight-bold justify-content-center">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white" href="index.html"><img src="image/logo new.png" style="height: 40px; weight:40px; ">&nbsp;ONLINE HEALTH CONSULTATION SERVICE</a>
      </li>
    </ul>
  </nav>

  <!-- FORM BOX -->
  <div class="container-fluid">
     
    <div class="row">
     <!--  LEFT -->
      <div class="col-4">
        <img src="image/doctor%202.png" alt="..." class=""
         style="height:230px; width:230px; margin-left:150px ; margin-top: 95px;">
      </div>
      <!-- RIGHT     -->
      <div class="col-8">
        <h3 style="margin-left: 30px;">DOCTOR DETAILS</h3> <input type="submit" value="Back" name="" style="float: right; margin-top: 0;" class="btn btn-primary text-white" onclick="location.href='dochomeportal.html'">
        <?php

if (isset($_SESSION['em']))
{
$sql = "SELECT doctor_id,name,email,gender FROM doctor where email =  '".$_SESSION['em']."' ";
$result = $conn-> query($sql);
if ($result -> num_rows > 0) 
{
// output data of each row
echo "<table cellpadding='0'' class='table table-borderless'  style='width: 100%;'>";
echo "<tbody>";
while($row = $result->fetch_assoc()) {
  echo "<tr><td width='19%'><b>DOCTOR ID :</b></td>"."  "."<td>"."<input type= 'text'  value=".$row['doctor_id']."  disabled>"."</td></tr>";
  echo "<tr><td width='19%'><b>NAME:</b></td>"."  "."<td>"."<input type= 'text'  value='".$row['name']."' disabled >"."</td></tr>";
  echo "<tr><td width='19%'><b>E-MAIL:</b></td>"."  "."<td>"."<input type= 'email' disabled value=".$row['email']."  >"."</td></tr>";
  echo "<tr><td width='19%'><b>GENDER:</b></td>"."  "."<td>"."<input type= 'text'  value='".$row['gender']."' disabled >"."</td></tr>";
    
}
echo "</tbody>";
echo "</table>";
} else { echo "0 results"; }
}
else
{
  echo "oops.....";
}


?>
<p id="updateaddress"><a href="" class="btn btn-outline-primary" style="margin-left: 30px;">Update Other Details</a></p>
      </div>

    </div>
  </div>

<!-- JAVA SCRIPTING -->
<script>

</script>

  
</body>

</html>
