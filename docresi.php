<?php
$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
if(!empty($name)|| !empty($email) || !empty($gender) || !empty($pass) || !empty($cpass))
{
    // if ($pass == $cpass)
    // {
    $host="localhost";
    $username="root";
    $password="";
    $dbname="health";
    $conn=new mysqli($host,$username,$password,$dbname);
    
    if(mysqli_connect_error())
    {
        die('connection error'.mysqli_connect_error());
    }else{
        if($pass == $cpass){
            $SELECT="SELECT email from doctor where email= '".$email."'";
	$result = $conn->query($SELECT);
    $numOfRows = $result->num_rows;
            if($numOfRows ==0)
            {
               $sql = "INSERT INTO doctor(name,email,gender,password,cpassword) values('".$name."','".$email."','".$gender."','".$pass."','".$cpass."')";
                 $result=$conn->query($sql);
            if($result){
                //echo "New record insert successfully";
                header('location: doc signin.html');
            }
                else{
                    echo  "There is some internal problem";
                }
            }
         
            else{
                echo  "User already exist";
            }
        } 
        else
        {
            echo "not connected";
        }
    }
    mysqli_close($conn);
}

?>