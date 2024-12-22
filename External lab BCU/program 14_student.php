<?php
$con = mysqli_connect('localhost', 'root', '') or die("Connection failed");
mysqli_query($con, "CREATE DATABASE IF NOT EXISTS db_new");
mysqli_select_db($con, 'db_new');
mysqli_query($con, "CREATE TABLE IF NOT EXISTS student (name VARCHAR(20), course VARCHAR(10))");
mysqli_query($con, "INSERT INTO student (name, course) VALUES ('{$_GET['txt_name']}', '{$_GET['txt_course']}')");
mysqli_query($con, "UPDATE student SET course='BCA'");
mysqli_query($con, "DELETE FROM student");

echo "Database operations completed.";
mysqli_close($con);
?>
