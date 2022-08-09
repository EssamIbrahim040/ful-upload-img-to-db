<?php
    include "header.php";
?>

<table>
   
    <th>Name</th>
    <th>Email</th>
    <th>Imeage</th>

    <?php

 
$db = mysqli_connect("localhost", "root", "", "Image_Upload"); 



    //export data from database
    $query = "SELECT * FROM image";
    $result = mysqli_query($db,$query);

    if($result){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr><td>"  .$row['user']. "</td>
                    <td>" .$row['email']. "</td>
                    <td>" .$row['filename'] ."</td></tr>";
    }
    echo "</table>";
}else {
    echo "some wonk";
}
?>