<?php
 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "health";
$conn = mysqli_connect($servername , $username, $password,$dbname);
     if(!$conn)
     {
         die("connection failed: " .mysqli_connect_error());
     }
     //echo "connected successfully"; 
    else
    {
       $sql = "INSERT INTO patient (id, name, email, ph_no, gender, password, cpassword) VALUES (
       0001,'bisw','biswa@gmail.com',9178509315,'male','hello','hello'
       )";
        
        if(mysqli_query($conn, $sql)){
            echo " NEW RECORD CREATED SUCCESSFULLY";
        }else{
            echo "ERROR CREATING RECORD: " .$sql ."<br>".mysqli_error($conn);
        }
    }

mysqli_close($conn);

?>