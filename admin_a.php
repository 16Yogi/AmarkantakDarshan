<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form ></form>
    <form action="" method="POST">
        <input type="file" name="imgfield">
        <input type="submit" name="upload" value="upload">
        <input type="submit" name="delete" value="delete">
    </form>
</body>
</html>
<?php 
     $conn = mysqli_connect("localhost","root","","amarkantak" );
     if($conn){
        echo "connection sucessfully";
     }
     else {
        echo "connection feild ";
     }


     if(isset($_POST['upload'])){
        $bnimg1 = $_FILES['imgfield']['name'];
        $bnimg1TMP = $_FILES['imgfield']['tmp_name'];
        $folder1 = "img/banner/";
        move_uploaded_file($bnimg1TMP,$folder1.$bnimg1);

        $query = "INSERT INTO `banner`(`b1`) VALUES (' $bnimg1')";
        $result = mysqli_query($conn,$query);

        if($result){
            echo "uploaded";
        }
        else{
            echo "field" ;
        }
     }





?>