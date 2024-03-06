<?php
    include("connection.php");
    // login data mathch
    if(isset($_POST['login'])){
        $sql = "SELECT * FROM `singup`";
        $qry = mysqli_query($con,$sql);

        while($row=mysqli_fetch_array($qry)){
            $username = $row['email'];
            $password = $row['password'];

            $log_uname = $_POST['urname'];
            $log_password = $_POST['urpass'];

        }
        if($username==$log_uname && $password==$log_password){
            header("Location: index.php");
            // include("index.php");
        }else{
            // echo "Data match failed..!";
           echo "<script>alert('Login failed...!');</script>";

        }
        // Google login 
            // $image2 = $row['bn2'];
            // $image3 = $row['bn3'];
    }
    

    // banner secation

    $bselect = "SELECT * FROM `banner`";
    $bqry = mysqli_query($con,$bselect);
    while($row=mysqli_fetch_array($bqry)){
        $bimg = $row['b1'];
        $b1img = $row['b2'];
        $b3img = $row['b3'];
        $b4img = $row['b4'];
        $b5img = $row['b5'];
        $b6img = $row['b6'];
        $b7img = $row['b7'];
    }
  
    // about secation
    $bselect = "SELECT * FROM `about`";
    $bqry = mysqli_query($con,$bselect);
    while($row=mysqli_fetch_array($bqry)){
        $a1img = $row['a1'];
        $a2img = $row['a2'];

    }

    // service secation
    $bselect = "SELECT * FROM `service`";
    $bqry = mysqli_query($con,$bselect);
    while($row=mysqli_fetch_array($bqry)){
        $s1img = $row['s1'];
        $s2img = $row['s2'];
        $s3img = $row['s3'];
        $s4img = $row['s4'];
        $s5img = $row['s5'];
        $s6img = $row['s6'];
    }

    // event secation
    $bselect = "SELECT * FROM `event`";
    $bqry = mysqli_query($con,$bselect);
    while($row=mysqli_fetch_array($bqry)){
        $e1img = $row['e1'];
        $e2img = $row['e2'];
        $e3img = $row['e3'];
    }


    // select gallery img

    $select = "SELECT * FROM `gallery`";
    $qry = mysqli_query($con,$select);

    while($row=mysqli_fetch_array($qry)){
        $g1img = $row['g1'];
        $g2img = $row['g2'];
        $g3img = $row['g3'];
        $g4img = $row['g4'];
        $g5img = $row['g5'];
        $g6img = $row['g6'];
        $g7img = $row['g7'];
        $g8img = $row['g8'];
        $g9img = $row['g9'];
        $g10img = $row['g10'];
        $g11img = $row['g11'];
        $g12img = $row['g12'];

    }

    // select hotel 
    $select = "SELECT * FROM `hotel`";
    $qry = mysqli_query($con,$select);

    while($row=mysqli_fetch_array($qry)){
        $hotelname = $row['hotelname'];
        $owner = $row['owner'];
        $contactnum = $row['contact'];
        $email = $row['email'];
        $add = $row['address'];
        $about = $row['abouthotel'];
        $hteimg1 = $row['hp1'];
        $hteimg2 = $row['hp2'];
        $hteimg3 = $row['hp3'];
        $hteimg4 = $row['hp4'];

    }
    
?>