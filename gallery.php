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
                <h3>Gallery</h3>
                <p><a href="index.php">Home</a> / <a href="aboutMain.php">About</a> / <a href="gallery.php">Gallery</a></p>
            </div>
        </div>
    </div>
    <!-- banner end -->
    <div class="container-fluid" id="g-container-fluid">
        <div class="container" id="g-container">
            <h3> Hey! <span>Welcome to our Gallery</span><i class="fa-solid fa-face-smile"></i></h3>
            <div class="row p-0" id="g-row">
                <div class="col-xl-3 col-md-6 col-sm-12 my-4">
                    <div class="img">
                       <img src="img/gallery/<?php echo $g1img; ?>" alt="">
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12 my-4">
                    <div class="img">
                        <img src="img/gallery/<?php echo $g2img; ?>" alt="">
                    </div>    
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12 my-4">
                    <div class="img">
                        <img src="img/gallery/<?php echo $g3img; ?>" alt="">
                    </div>    
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12 my-4">
                    <div class="img">
                        <img src="img/gallery/<?php echo $g4img; ?>" alt="">
                    </div>   
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12 my-4">
                    <div class="img">
                       <img src="img/gallery/<?php echo $g5img; ?>" alt="">
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12 my-4">
                    <div class="img">
                        <img src="img/gallery/<?php echo $g6img; ?>" alt="">
                    </div>    
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12 my-4">
                    <div class="img">
                        <img src="img/gallery/<?php echo $g7img; ?>" alt="">
                    </div>    
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12 my-4">
                    <div class="img">
                        <img src="img/gallery/<?php echo $g8img; ?>" alt="">
                    </div>   
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12 my-4">
                    <div class="img">
                       <img src="img/gallery/<?php echo $g9img; ?>" alt="">
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12 my-4">
                    <div class="img">
                        <img src="img/gallery/<?php echo $g10img; ?>" alt="">
                    </div>    
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12 my-4">
                    <div class="img">
                        <img src="img/gallery/<?php echo $g11img; ?>" alt="">
                    </div>    
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12 my-4">
                    <div class="img">
                        <img src="img/gallery/<?php echo $g12img; ?>" alt="">
                    </div>   
                </div>
            </div>
            <h3 class="py-5">Amarkantak Videos</h3>
            <div class="row my-6">
                <iframe width="560" height="315" class="m-auto" src="https://www.youtube.com/embed/7PpuRHnFIY8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <!-- <iframe src="" frameborder="0" class="responsive-iframe"></iframe> -->
            </div>
        </div>
    </div>

    <?php
       include("event.php");
       include("impLinks.php");
       include("footer.php");
    ?>
</body>
</html>