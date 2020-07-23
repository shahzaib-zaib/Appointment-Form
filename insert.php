<?php

    $con = mysqli_connect("localhost","root","", "registrationform") or die("Connection Failed : " . mysqli_connect_error());
    
   if(isset($_POST['submit'])){
       $username = $_POST['username'];
       $useremail = $_POST['useremail'];
       $userphone = $_POST['userphone'];
       $useraddress = $_POST['useraddress'];
       $usercity = $_POST['usercity'];
       $userstate = $_POST['userstate'];
       $userzip = $_POST['userzip'];
       $timing = $_POST['timing[]'];


       $sql = "INSERT INTO appointmentform(Name,Email,Phone,Address,City,State,Zip,WorkTime)
       VALUES ('$username', '$useremail', '$userphone', '$useraddress', '$usercity', '$userstate', '$userzip', '$timing')";

        if(mysqli_query($con, $sql)){
            header("location:index.php");
        }else{
            echo "<div class='alert alert-danger'>Query Failed</div>";
        }

        }
?>