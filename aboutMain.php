<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        // include("asset/head.php");
    ?>
</head>
<body>
    <!-- page loader -->
    <!--begin::Page loading(append to body)-->
    <!-- <div class="page-loader">
        <span class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </span>
    </div> -->
    <!--end::Page loading-->
    <!--  -->

    <?php
        include("headderService.php");
    // include("banner-secation.php");
    ?>
    <div class="container-fluid p-0" id="bsm-container-fluid" style="background-image:url('img/banner/<?php echo $b1img; ?>');">
        <div class="container-fluid p-0" id="bgclr">
            <div class="container" id="bsm-container">
                <h3>About us</h3>
                <p><a href="index.php" target="blank">Home</a> / <a href="aboutMain.php" target="blank">About</a> / <a href="gallery.php" target="blank">Gallery</a></p>
            </div>
        </div>
    </div>
    <?php
        
        include("about.php");
        // include("service.php");
        include("event.php");
        include("map.php");
        include("impLinks.php");
        include("footer.php");
    ?>
    <!--  -->
    <script src="js/page-loader.js"></script>
</body>
</html>