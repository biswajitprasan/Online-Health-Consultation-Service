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
    
    if(mysqli_connect_error())
    {
        die('connection error'.mysqli_connect_error());
    }else{
        if($pass == $cpass){
            $SELECT="SELECT email from patient where email= '".$email."'";
	$result = $conn->query($SELECT);
    $numOfRows = $result->num_rows;
            if($numOfRows ==0)
            {
               $sql = "INSERT INTO patient(name,email,ph_no,gender,password,cpassword) values('".$name."','".$email."','".$ph."','".$gender."','".$pass."','".$cpass."')";
                 $result=$conn->query($sql);
            if($result){
                header('location: patient signin.html');
                //echo "New record insert successfully";
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