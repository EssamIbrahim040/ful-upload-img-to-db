<?php include "header.php"; ?>
<?php //connect with database
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbName = 'hospital';
 $conn = mysqli_connect($host, $user, $password, $dbName);
//  if(isset($conn)){
//     echo "you are connect with db";
//  }else {
//     echo "you not connect with db";
//  }
 ?>
<div class="form">
    <form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="id" placeholder="Enter Your id"><br>
        <input type="text" name="name" placeholder="Enter Your Name"><br>
        <input type="email" name="email" placeholder="Enter Your Email"><br>
        <input type="file" name="upload"><br>
        <input class="btn" type="submit" name="send" vaule="Send">
    </form>
    <?php
    if(isset($_POST['send'])){
        $sId = $_POST['id'];
        $sName = $_POST['name'];
        $sEmail = $_POST['email'];
        $sFile = $_FILES['upload']['name'];
        $temp = $_FILES['upload']['temp_name'];
        $foloder = "img/".$sFile;
        move_uploaded_file($temp.$foloder);

        if($sId == "" && $sName == ""){
            $qeury = "INSERT INTO std(id, name, email, img)VALUE('$sId','$sName','$sEmail','$sFile')";
            $result = mysqli_query($conn,$qeury);

            if($result){
                echo "The Obration is don";
            }else {
                echo "An error occurred, try again";
            }
        }
    }
    ?>
</div>