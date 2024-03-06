<?php
    include("connection.php");

    // banner delete
    if(isset($_POST['bdelete'])){
        $bdelete = "DELETE FROM `banner`";
        $bre = mysqli_query($con,$bdelete);

        if($bdelete){
            echo "<script>alert('image deleted');</script>";
        }else{
            echo "<script>alert('image not deleted');</script>";
        }
    }

    // about delete
    if(isset($_POST['adelete'])){
        $bdelete = "DELETE FROM `about`";
        $bre = mysqli_query($con,$bdelete);

        if($bdelete){
            echo "<script>alert('image deleted');</script>";
        }else{
            echo "<script>alert('image not deleted');</script>";
        }
    }

    // service delete
    if(isset($_POST['sdelete'])){
        $bdelete = "DELETE FROM `service`";
        $bre = mysqli_query($con,$bdelete);

        if($bdelete){
            echo "<script>alert('image deleted');</script>";
        }else{
            echo "<script>alert('image not deleted');</script>";
        }
    }

    // event delete
    if(isset($_POST['edelete'])){
        $bdelete = "DELETE FROM `event`";
        $bre = mysqli_query($con,$bdelete);

        if($bdelete){
            echo "<script>alert('image deleted');</script>";
        }else{
            echo "<script>alert('image not deleted');</script>";
        }
    }

?>