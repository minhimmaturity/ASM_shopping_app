<?php
session_start();
echo "logout successfully";
session_destroy();
header('location:login.php');
