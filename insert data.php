<?php
include('connetion.php');
$insertData="INSERT INTO `graphics` (`id`, `Name`, `Mobile`, `As /Ps`) VALUES ('2', 'fgdg', 'huhlhugg ', 'p');";
if(mysqli_query($con,$insertData))
{
    echo 'insert data sucessfuly';
}
else
{
    echo 'insert data not sucessfully';
}
?>