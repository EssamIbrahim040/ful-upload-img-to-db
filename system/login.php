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
      $query = "SELECT * FROM user WHERE username='$user' AND password='$pass'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_nuw_rows($result);
      if($rows == 1){
        $_SESSION["user"]= $user;
        header("location: dahbord.php");
      }
      $error = true;
       mysqli_close(  $conn );
    
    }

?>
<div class="form">
    <p>Login </p>
    <form action="index.php" method="post">
        <input type="text" name="name" placeholder="Enter Your Name OR Email"><br>
        <input type="password" name="pass" placeholder="Enter Your Password"><br>
        <input class="btn" type="submit" name="send" vaule="Send">
      <p>if yout have acount <a href="singup.php">Click Here</a></p>
    </form></div>

    <?php
    if(isset($error)){
        echo "An error occurred, try again";
    }
    ?>