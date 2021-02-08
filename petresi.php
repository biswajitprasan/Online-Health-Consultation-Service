<?php
$name=$_POST['name'];
$email=$_POST['email'];
$ph=$_POST['phno'];
$gender=$_POST['gender'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
if(!empty($name)|| !empty($email) || !empty($ph)|| !empty($gender) || !empty($pass) || !empty($cpass))
{
    // if ($pass == $cpass)
    // {
    $host="localhost";
    $username="root";
    $password="";
    $dbname="health";
    $conn=new mysqli($host,$username,$password,$dbname);
	//print_r($conn);
    
    if(mysqli_connect_error())
    {
        die('connection error'.mysqli_connect_error());
    }
    else
    {
    $SELECT="SELECT email from patient where email= '".$email."'";
	$result = $conn->query($SELECT);
    $numOfRows = $result->num_rows;
        //echo $numOfRows;
    if($numOfRows == 0)
    {
		$INSERT="INSERT INTO patient(name,email,ph_no,gender,password,cpassword) values('".$name."','".$email."','".$ph."',".$gender.",'".$pass.",'".$cpass.")";
    //echo $INSERT;
    $result=$conn->query($INSERT);
	
    
    if($result)
    {
    
        echo '{"status" : "success" , "message" : "New record insert successfully"}';
    }
    else
    {
    echo '{"status" : "error" , "message" : "There is some internal problem"}';
    }
}

 }
// }

else{
		echo '{"status" : "error" , "message" : "User already exist"}';
	}
    
 $conn->close();
else
{
 echo "All field are required"; 
    die();
}
?>