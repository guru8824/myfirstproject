<?php
include('connetion.php');
$fetechhost='SELECT * FROM `photoshop`';
$results= mysqli_query($con,$fetechhost);
if($results)
{
    echo "<table width='500' align='center' border='1'> 
    <tr>
    <th align='left'>Enroll No</th>
    <th align='left'>Name</th>
    </tr>";
    while($row = mysqli_fetch_assoc($results))
    {
        echo "<tr><td>En_00" .$row['id']."</td>";
        echo "<td align='center'>";
        if($row['Name']=='A')   
        {
          echo  "<span style='color:blue'>A,E,I,O,U</span>";
        }
        else
        {
            echo "<span style='color:green'>B,C,D,F,G,H,J,K,L,M,N,P,Q,R,S.T,V,W,X,Y,Z</span>";
        }
        echo"</td></tr>";
    
        echo "</table>";
        
    }
}
?>