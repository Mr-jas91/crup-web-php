<?php
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['class'];
$stu_phone = $_POST['sphone'];

include 'config.php';

$sql = "INSERT INTO student(sname,saddress,sclass,sphone) VALUE('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
$result = mysqli_query($conn, $sql) or die("query unsuccessful.");

header("location: http://localhost/crud_html/crud_html/index.php");

mysqli_close($conn);
?>