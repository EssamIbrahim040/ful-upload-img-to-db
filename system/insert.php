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
        <input type="file" name="choosefile"><br>
        <input class="btn" type="submit" name="send" vaule="Send">
    </form>
    <?php
    $msg = ""; 
    if(isset($_POST['send'])){
        $sId = $_POST['id'];
        $sName = $_POST['name'];
        $sEmail = $_POST['email'];
        $filename = $_FILES["choosefile"]["name"];
        $tempname = $_FILES["choosefile"]["tmp_name"]; 
        $foloder = "img/".$filename;
        move_uploaded_file($temp ,$foloder);

   
            $qeury = "INSERT INTO std(id, name, email, img)VALUE('$sId','$sName','$sEmail','$filename')";
            mysqli_query($conn,$qeury);

            if (move_uploaded_file($tempname, $folder)) {

                $msg = "Image uploaded successfully";
    
            }else{
    
                $msg = "Failed to upload image";
    
        }
        
    }
    ?>
</div>