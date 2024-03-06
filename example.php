<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
         
         include("asset/connection.php");
         $sql = "SELECT * FROM hotel WHERE hotelname='OYO'";
         $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
       while($row = mysqli_fetch_assoc($result)) {
       echo "hotelname: " . $row["hotelname"]. " - owner: " . $row["owner"]. "contact " . $row["contact"]. "<br>";
       echo "email: " . $row["email"]. " - address: " . $row["address"]. "abouthotel " . $row["abouthotel"]. "<br>";
       echo "hp1: " . $row["hp1"]. " - hp2: " . $row["hp2"]. "hp3 " . $row["hp3"] . "hp4" . $row["hp4"]. "<br>";


  

// `hotelname`, `owner`, `contact`, `email`, `address`, `abouthotel`, `hp1`, `hp2`, `hp3`, `hp4`






         // $selectstu = "SELECT * FROM `hotel`where `hotelname`='OYO'";
         // $var=mysqli_query($con,$selectstu);
         //        echo $row['hotelname'];
         //        echo $row['owner'];
         //        echo $row['contact'];
         //        echo $row['email'];
         //        echo $row['address'];
         //        echo $row['abouthotel'];
                
    ?>
    <img src="img/hotel/<?php echo $row['hp1'];?>" alt="">
    <img src="img/hotel/<?php echo $row['hp2'];?>" alt="">
    <img src="img/hotel/<?php echo $row['hp3'];?>" alt="">
    <img src="img/hotel/<?php echo $row['hp4'];?>" alt="">
    <?php
     }
} else {
  echo "0 results";
}


    ?>

     
</body>
</html>