<?php
    include "header.php";
?>
   <?php 
   session_start();
    if(isset($_SESSION["user"])){
        header("location: index.php");
    }
    if(isset($_GET["logout"])){
        session_destroy();
        header("location: index.php");
    }
    $user = $_SESSION["user"];
    ?>
    <h1>Welcome <?php echo "$user" ; ?></h1>
    <a href="?logout">LogOut</a>