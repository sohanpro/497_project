<?php
$conn = new mysqli('localhost','root','','gd_admin');
if ($conn->connect_error) {
    die('Error : ('. $conn->connect_errno .') '. $conn->connect_error);
}
?>