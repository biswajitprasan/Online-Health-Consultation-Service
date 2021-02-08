<?php
session_start();
$email=$_POST['email'];
$pass=$_POST['pass'];
if(!empty($email)|| !empty($pass))
{
    $host="localhost";
    $username="root";
    $password="";
    $dbname="health";
    $conn = mysqli_connect($host, $username, $password,$dbname);
    if(!$conn)
    {
        die('connection error'.mysqli_connect_error());
    }
    else
    {
    $SELECT="SELECT count(1) from patient where email= '".$email."' and password= '".$pass."'";
   // $SELECT="SELECT password from reg where password= '".$pass."'";
    $result = $conn->query($SELECT);
    if($result){
		$_SESSION['em'] = $email;
		 $_SESSION['pass'] = $pass;
        header('location:pathomeportal.php');
//        echo "successful";
    }else{
        echo "Email & Password are not Available";
		header('location:patient signin.html');
    }
   
}
mysqli_close($conn);
}
else
{
echo "All field are required"; 
  die();
}
?>