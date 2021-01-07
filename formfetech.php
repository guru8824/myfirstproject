<?php
include('connetion.php');
$fetechhost='SELECT * FROM `webdesign`';
$results= mysqli_query($con,$fetechhost);
if($results)
{
    echo "<table width='500' align='center' border='1'> 
    <tr>
    <th align='left'>Enroll No</th>
    <th align='left'>Name</th>
    <th align='left'>Mobile No</th>
    <th align='center'>A/S</th>
    </tr>";
    while($row = mysqli_fetch_assoc($results))
    {
        echo "<tr><td>En_00" .$row['id']."</td>";
        echo "<td>" .$row['Name']."</td>";
        echo "<td>" .$row['Mobile']."</td>";
        echo "<td align='center'>";
        if($row['As_Ps']=='a' || $row['As_Ps']=='A')
    {
    echo "<span style='color:red'>A</span>";}
    else{
        echo "<span style='color:blue'>P</span>";
    }}
        echo"</td></tr>";
    
    echo "</table>";
    
}
?>