<?php
    include "header.php";
?>

<table>
    <th>pID</th>
    <th>pName</th>
    <th>pEmail</th>
    <th>pDate</th>

    <?php

        $host ='localhost';
        $user ='root';
        $password ='';
        $dbName = 'hospital';

      $conn =   mysqli_connect($host, $user, $password, $dbName);
    // if(isset($conn)){
    //     echo "you are connected with database";
    // } else {
    //     echo "you not connected wit database";
    // }



    //export data from database
    $query = "SELECT * FROM patients";
    $result = mysqli_query($conn,$query);

    if($result){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr><td>" .$row['id']. "</td><td>" .$row['name']. "</td><td>" .$row['email']. "</td><td>" .$row['date'] ."</td></tr>";
    }
    echo "</table>";
}else {
    echo "some wonk";
}
?>