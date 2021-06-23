<?php 
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];
    //Login Validation
    $search = "SELECT * FROM admins WHERE username='".$uname."' AND password = '".$pwd."'";
    include './dbconnection.php';
    $process_query = mysqli_query($dbconn,$search);
    if(($process_query== true) && (mysqli_num_rows($process_query) !=0) ){
        echo "User Found";
        echo "Redirecting to the Admin Portal";
        header( "refresh:3;url=./adminportal.php" );
    }   
    else{
        echo "Invalid Username or Password";
        echo "Redirecting back to Login page";
        header( "refresh:3;url=../html/adminlogin.html" );
    }

?>