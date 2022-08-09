<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Hospital System</title>
</head>
<body>
    <div class="main">
        <img src="img/icons.png" alt="">
        <p>Encrmint Hospital</p>
    </div>
<div class="form">
    <form action="index.php" method="post">
        <input type="text" name="name" placeholder="Enter Your Name"><br>
        <input type="email" name="email" placeholder="Enter Your Email"><br>
        <input type="date" name="date"><br>
        <input class="btn" type="submit" name="send" vaule="Send">
    </form>

    <?php 
     // connect with database 
     $host ='localhost';
     $user ='root';
     $password ='';
     $dbName = 'hospital';

   $conn =   mysqli_connect($host, $user, $password, $dbName);

//    if(isset($conn)){
//     echo "your connected with database";
//    }else {
//     echo "you not contnect with database";
//    }

   //send date with paitante to database
        $pName = $_POST['name'];
        $pEmail = $_POST['email'];
        $pDate = $_POST['date'];
        $pSend = $_POST['send'];


        if($pSend){
            $query = "INSERT INTO patients(name,email,date)VALUE('$pName','$pEmail','$pDate')";
            $result = mysqli_query($conn,$query);
            header("location: admin.php");
        } else {
            echo "iTs Not Done";
        }
    ?>

    </div>
</body>
</html>