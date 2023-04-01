<?php
session_start();
include("connection.php");
extract($_POST);
$id = $_SESSION['id'];

$sql = "update user set full_name = '$name', email = '$email', password = '$pwd', age = '$age', location = '$location', contact_no = '$contact'   where userid = '$id'";
$result = mysqli_query($conn, $sql);

if($result){
    header('Location:1stpage.php');
}else{
    echo "Something went wrong";
}

?>