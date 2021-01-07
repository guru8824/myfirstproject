<?php
$hostName='localhost';
$userName='root';
$password='';
$con = mysqli_connect($hostName,$userName,$password);
if($con)
{
    $db="create database studentattendance";
    mysqli_query($con,$db);
}
else
{
echo 'database not connected sucessfully';
}
?>