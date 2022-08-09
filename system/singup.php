<?php
    include "header.php";
?>
<?php
    session_start();
    if(isset($_SESSION["user"])){
        header("location: dahbord.php");
    }
    if(isset($_POST["Send"])){
        $user = $_POST["name"];
        $pass = $_POST["pass"];


        $host ='localhost';
        $user ='root';
        $password ='';
        $dbName = 'hospital';
   
      $conn =   mysqli_connect($host, $user, $password, $dbName);
      $query = "INSERT INTO user(username,password)VALUE('$user','$pass')";
       mysqli_query($conn,$query);
       mysqli_close(  $conn );
       header("locstion: dahbord.php");
    }

?>
<div class="form">
    <p>SingUp </p>
    <form  method="post">
        <input type="text" name="name" placeholder="Enter Your Name OR Email"><br>
        <input type="password" name="pass" placeholder="Enter Your Password"><br>
        <input class="btn" type="submit" name="send" vaule="Send">
      <p>Do you have acount <a href="login.php">Click Here</a></p>
    </form></div>