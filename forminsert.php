<?php
include('connetion.php');
if(isset($_POST['submit']))
{
 $name=$_POST['name'];
   $mobile=$_POST['mobile'];
   $ap=$_POST['a'];
    $insertData = "INSERT INTO `webdesign` (`id`, `Name`, `Mobile`, `As_Ps`) VALUES ('', '$name', '$mobile', '$ap')";

    if(mysqli_query($con,$insertData))
{
    echo 'insert data sucessfuly';
}
else
{
    echo 'insert data not sucessfully';
}
}
?>