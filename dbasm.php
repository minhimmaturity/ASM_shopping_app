<?php
$hostname = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'electric shop';
$port = 8889;
function query ($sql = "") {
    global $hostname;
    global $username;
    global $password;
    global $dbname;
    global $port;
    $conn = new mysqli($hostname, $username, $password, $dbname, $port);
    if ($conn->connect_error) {
        echo "Connection failed <br>";
    die ($conn ->connect_error);
    } 
    $result = $conn ->query($sql);
    if (!$result) {
        echo "SQL exection failed <br>";
        die ($conn -> error);
    }
    $rows = mysqli_fetch_all($result);
    $conn->close();
    return $rows;
}
?>