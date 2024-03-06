<!DOCTYPE html>
<html lang="en">
<head>
    <?php
       include("asset/head.php");
    ?>
</head>
<body>
    <?php
        include("headder.php");
    ?>
    <!-- banner -->
    <div class="container-fluid p-0" id="bsm-container-fluid" style="background-image:url('https://images.pexels.com/photos/775219/pexels-photo-775219.jpeg?auto=compress&cs=tinysrgb&w=600');">
        <div class="container-fluid p-0" id="bgclr">
            <div class="container" id="bsm-container">
                <h3>All Service</h3>
                <p><a href="index.php" target="blank">Home</a> / <a href="aboutMain.php" target="blank">About</a> / <a href="gallery.php" target="blank">Gallery</a></p>
            </div>
        </div>
    </div>
    <!-- banner end -->
    <?php
        // include("banner-secation.php");
        // include("about.php");
        include("service.php");
        include("event.php");
        include("map.php");
        include("impLinks.php");
        include("footer.php");
    ?>
</body>
</html>