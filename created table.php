<?php
include('connetion.php');
$createTable="CREATE TABLE `graphics` ( `id` INT NULL DEFAULT NULL AUTO_INCREMENT , `Name` VARCHAR(500) NOT NULL , `Mobile` VARCHAR(200) NOT NULL , `As /Ps` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`))";
if(mysqli_query($con,$createTable))
{
    echo'table create sucessfully';
}
else
{
    echo 'table not create';
}
?>