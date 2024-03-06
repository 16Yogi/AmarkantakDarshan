<?php


    include("connection.php");
    
    // create account
    if(isset($_POST['submitsingup'])){
        $fname = $_POST['fname'];
        $mob = $_POST['mobemail'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];


        $sql = "INSERT INTO `singup`(`fullname`, `email`, `password`, `repassword`) VALUES ('$fname','$mob','$password','$repassword')";
        $qry = mysqli_query($con,$sql);

        if($qry){
            // echo "data uploaded...!";
          echo "<script>alert('Account successfully created...!');</script>";
        }else{
            // echo "File not uploaded...!";
          echo "<script>alert('Account not created...!');</script>";
        }
    }

    //================= insert command ==============
    // if(isset($_POST['bbsubmit'])){
    //   $bnimg1 = $_FILES['img1']['name'];
    //   $bnimg1TMP = $_FILES['img1']['tmp_name'];
    //   $folder1 = "img/banner/";
    //   move_uploaded_file($bnimg1TMP,$folder1.$bnimg1);

    //   $querb = "INSERT INTO  'banner' ('b1') VALUES ('$bnimg1)";
    //   $result = mysqli_query($con,$bnimg1);

    //   if($result){
    //     echo "uploaded";
    //   }
    //    else{
    //     echo "field";
    //    }


    // }

   if(isset($_POST['bbsubmit'])){
      $bimg = $_FILES['img1']['name'];
      $bimgTMP = $_FILES['img1']['tmp_name'];
      $bfolder = "img/banner/";
      move_uploaded_file($bimgTMP,$bfolder.$bimg);

      $b1img = $_FILES['img2']['name'];
      $b1imgTMP = $_FILES['img2']['tmp_name'];
      $b1folder = "img/banner/";
      move_uploaded_file($b1imgTMP,$b1folder.$b1img);

      $b3img = $_FILES['img3']['name'];
      $b3imgTMP = $_FILES['img3']['tmp_name'];
      $b3folder = "img/banner/";
      move_uploaded_file($b3imgTMP,$b3folder.$b3img);

      $b4img = $_FILES['img4']['name'];
      $b4imgTMP = $_FILES['img4']['tmp_name'];
      $b4folder = "img/banner/";
      move_uploaded_file($b4imgTMP,$b4folder.$b4img);

      $b5img = $_FILES['img5']['name'];
      $b5imgTMP = $_FILES['img5']['tmp_name'];
      $b5folder = "img/banner/";
      move_uploaded_file($b5imgTMP,$b5folder.$b5img);

      $b6img = $_FILES['img6']['name'];
      $b6imgTMP = $_FILES['img6']['tmp_name'];
      $b6folder = "img/banner/";
      move_uploaded_file($b6imgTMP,$b6folder.$b6img);

      $b7img = $_FILES['img7']['name'];
      $b7imgTMP = $_FILES['img7']['tmp_name'];
      $b7folder = "img/banner/";
      move_uploaded_file($b7imgTMP,$b7folder.$b7img);

      $bqry = "INSERT INTO `banner`(`b1`,`b2`,`b3`,`b4`,`b5`,`b6`,`b7`) VALUES ('$bimg','$b1img','$b3img','$b4img','$b5img','$b6img','$b7img')";
      $bresult = mysqli_query($con,$bqry);

      if($bresult){
        echo "<script>alert('image successfully inserted..!');</script>";
      }else{
        echo "<script>alert('image not inserted..!');</script>";
      }
   }
   
//    About secation
    
    if(isset($_POST['asubmit'])){
        $a1img = $_FILES['aimg1']['name'];
        $a1imgTMP = $_FILES['aimg1']['tmp_name'];
        $a1folder = "img/about/";
        move_uploaded_file($a1imgTMP,$a1folder.$a1img);
       
        $a2img = $_FILES['aimg2']['name'];
        $a2imgTMP = $_FILES['aimg2']['tmp_name'];
        $a2folder = "img/about/";
        move_uploaded_file($a2imgTMP,$a2folder.$a2img);
        
        $aqry = "INSERT INTO `about`(`a1`, `a2`) VALUES ('$a1img','$a2img')";
        $aresult = mysqli_query($con,$aqry);

      if($aresult){
        echo "<script>alert('image successfully inserted..!');</script>";
      }else{
        echo "<script>alert('image not inserted..!');</script>";
      }
    }

// service section
    
if(isset($_POST['ssubmit'])){
    $s1img = $_FILES['simg1']['name'];
    $s1imgTMP = $_FILES['simg1']['tmp_name'];
    $s1folder = "img/service/";
    move_uploaded_file($s1imgTMP,$s1folder.$s1img);
    
    $s2img = $_FILES['simg2']['name'];
    $s2imgTMP = $_FILES['simg2']['tmp_name'];
    $s2folder = "img/service/";
    move_uploaded_file($s2imgTMP,$s2folder.$s2img);

    $s3img = $_FILES['simg3']['name'];
    $s3imgTMP = $_FILES['simg3']['tmp_name'];
    $s3folder = "img/service/";
    move_uploaded_file($s3imgTMP,$s3folder.$s3img);

    $s4img = $_FILES['simg4']['name'];
    $s4imgTMP = $_FILES['simg4']['tmp_name'];
    $s4folder = "img/service/";
    move_uploaded_file($s4imgTMP,$s4folder.$s4img);

    $s5img = $_FILES['simg5']['name'];
    $s5imgTMP = $_FILES['simg5']['tmp_name'];
    $s5folder = "img/service/";
    move_uploaded_file($s5imgTMP,$s5folder.$s5img);

    $s6img = $_FILES['simg6']['name'];
    $s6imgTMP = $_FILES['simg6']['tmp_name'];
    $s6folder = "img/service/";
    move_uploaded_file($s6imgTMP,$s6folder.$s6img);
    
    
    $aqry = "INSERT INTO `service`(`s1`, `s2`, `s3`, `s4`, `s5`,`s6`) VALUES ('$s1img','$s2img','$s3img','$s4img','$s5img','$s6img')";
    $aresult = mysqli_query($con,$aqry);

  if($aresult){
    echo "<script>alert('image successfully inserted..!');</script>";
  }else{
    echo "<script>alert('image not inserted..!');</script>";
  }
}

// event secation
if(isset($_POST['esubmit'])){
    $e1img = $_POST['eimg1'];

    $e2img = $_POST['eimg2'];

    $e3img = $_FILES['eimg3']['name'];
    $e3imgTMP = $_FILES['eimg3']['tmp_name'];
    $e3folder = "img/event/";
    move_uploaded_file($e3imgTMP,$e3folder.$e3img);        
    
    $aqry = "INSERT INTO `event`(`e1`, `e2`, `e3`) VALUES ('$e1img','$e2img','$e3img')";
    $aresult = mysqli_query($con,$aqry);

  if($aresult){
    echo "<script>alert('image successfully inserted..!');</script>";
  }else{
    echo "<script>alert('image not inserted..!');</script>";
  }
}

// hotel profile

if(isset($_POST['hpsubmit'])){
    $h1 = $_POST['h1'];
    $h2 = $_POST['h2'];
    $h3 = $_POST['h3'];
    $h4 = $_POST['h4'];
    $h5 = $_POST['h5'];
    $h6 = $_POST['h6'];

    $h7img = $_FILES['h7']['name'];
    $h7imgTMP = $_FILES['h7']['tmp_name'];
    $h7folder = "img/hotel/";
    move_uploaded_file($h7imgTMP,$h7folder.$h7img);

    $h8img = $_FILES['h8']['name'];
    $h8imgTMP = $_FILES['h8']['tmp_name'];
    $h8folder = "img/hotel/";
    move_uploaded_file($h8imgTMP,$h8folder.$h8img);

    $h9img = $_FILES['h9']['name'];
    $h9imgTMP = $_FILES['h9']['tmp_name'];
    $h9folder = "img/hotel/";
    move_uploaded_file($h9imgTMP,$h9folder.$h9img);

    $h10img = $_FILES['h10']['name'];
    $h10imgTMP = $_FILES['h10']['tmp_name'];
    $h10folder = "img/hotel/";
    move_uploaded_file($h10imgTMP,$h10folder.$h10img);

    $aqry = "INSERT INTO `hotel`(`hotelname`, `owner`, `contact`, `email`, `address`, `abouthotel`, `hp1`, `hp2`, `hp3`, `hp4`) VALUES ('$h1','$h2','$h3','$h4','$h5','$h6','$h7img','$h8img','$h9img','$h10img')";
    $aresult = mysqli_query($con,$aqry);

    if($aresult){
      echo "<script>alert('image successfully inserted..!');</script>";
    }else{
      echo "<script>alert('image not inserted..!');</script>";
    }
  
}
    

// Gallery secation 
if(isset($_POST['gsubmit'])){
    
    $g1img = $_FILES['g1']['name'];
    $g1imgTMP = $_FILES['g1']['tmp_name'];
    $g1folder = "img/gallery/";
    move_uploaded_file($g1imgTMP,$g1folder.$g1img);
    
    $g2img = $_FILES['g2']['name'];
    $g2imgTMP = $_FILES['g2']['tmp_name'];
    $g2folder = "img/gallery/";
    move_uploaded_file($g2imgTMP,$g2folder.$g2img);
  
    $g3img = $_FILES['g3']['name'];
    $g3imgTMP = $_FILES['g3']['tmp_name'];
    $g3folder = "img/gallery/";
    move_uploaded_file($g3imgTMP,$g3folder.$g3img);
    
    $g4img = $_FILES['g4']['name'];
    $g4imgTMP = $_FILES['g4']['tmp_name'];
    $g4folder = "img/gallery/";
    move_uploaded_file($g4imgTMP,$g4folder.$g4img);
  
    $g5img = $_FILES['g5']['name'];
    $g5imgTMP = $_FILES['g5']['tmp_name'];
    $g5folder = "img/gallery/";
    move_uploaded_file($g5imgTMP,$g5folder.$g5img);
    
    $g6img = $_FILES['g6']['name'];
    $g6imgTMP = $_FILES['g6']['tmp_name'];
    $g6folder = "img/gallery";
    move_uploaded_file($g6imgTMP,$g6folder.$g6img);

    $g7img = $_FILES['g7']['name'];
    $g7imgTMP = $_FILES['g7']['tmp_name'];
    $g7folder = "img/gallery/";
    move_uploaded_file($g7imgTMP,$g7folder.$g7img);

    $g8img = $_FILES['g8']['name'];
    $g8imgTMP = $_FILES['g8']['tmp_name'];
    $g8folder = "img/gallery/";
    move_uploaded_file($g8imgTMP,$g8folder.$g8img);

    $g9img = $_FILES['g9']['name'];
    $g9imgTMP = $_FILES['g9']['tmp_name'];
    $g9folder = "img/gallery/";
    move_uploaded_file($g9imgTMP,$g9folder.$g9img);

    $g10img = $_FILES['g10']['name'];
    $g10imgTMP = $_FILES['g10']['tmp_name'];
    $g10folder = "img/gallery/";
    move_uploaded_file($g10imgTMP,$g10folder.$g10img);

    $g11img = $_FILES['g11']['name'];
    $g11imgTMP = $_FILES['g11']['tmp_name'];
    $g11folder = "img/gallery/";
    move_uploaded_file($g11imgTMP,$g11folder.$g11img);

    $g12img = $_FILES['g12']['name'];
    $g12imgTMP = $_FILES['g12']['tmp_name'];
    $g12folder = "img/gallery/";
    move_uploaded_file($g12imgTMP,$g12folder.$g12img);

    $sqla = "INSERT INTO `gallery`(`g1`, `g2`, `g3`, `g4`, `g5`, `g6`, `g7`, `g8`, `g9`, `g10`, `g11`, `g12`) VALUES ('$g1img','$g2img','$g3img','$g4img','$g5img','$g6img','$g7img','$g8img','$g9img','$g10img','$g11img','$g12img')";
    $result = mysqli_query($con,$sqla);
    
    if($result){
      echo "<script>alert('Img inserted...!');</script>";
    }else{
      echo "<script>alert('img not inserted...!')</script>";
    }
}

?>