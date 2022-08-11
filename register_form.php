<?php
    if (isset($_POST['']) && $_POST["Email"] != '' && $_POST["PhoneNumber"] != '' 
    && $_POST["birthdate"] != '' && $_POST["UserName"] != '' && $_POST["UserPassword"] != '' && $_POST["cPassword"] != '') {
        $Email = $_POST['Email'];
        $PhoneNumber = $_POST['PhoneNumber'];
        $birthdate = $_POST['birthdate'] ;
        $UserName = $_POST['UserName'] ;
        $UserPassword = $_POST['uUserPassword'] ;
        $Password = $_POST['cPassword'] ;
        if($uUserPassword != $cPassword) {
            echo "password not pass";
        }
        $sql = "SELECT * FROM accounts WHERE username = '$uUsername'";
        $old = mysqli_query($conn, $sql);
        $uPassword = md5($uPassword);
        if (mysqli_num_rows($old) > 0) {
            echo "error";
        }
        else {
            $sql = "Insert into account (username, password, email, birthdate, phone_number) 
            values ('$uUsername','$uPassword','$uEmail','$birthdate','$uPhoneNumber')";
            mysqli_query($conn, $sql);
            echo "Register Successfully";
        }
    }
    else {
        header ("location:register.php");
    }
?>