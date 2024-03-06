<?php
//    include("asset/connection.php");
//    include("asset/insert.php");
//    include("asset/update.php");
//    include("asset/select.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
       include("asset/head.php");
    ?>
</head>
<body>
    <div class="container-fluid p-0" id="about-container-fluid">
        <div class="container p-0" id="about-container">
            <div class="main-about">
                <div class="child-about">
                    <h2>About US</h2>
                    <div class="about-wrap">
                        <div class="about-iteam">
                            <img src="img/about/<?php echo $a1img; ?>" alt="">
                            <!-- <img src="https://www.pixelstalk.net/wp-content/uploads/2016/07/HD-pictures-1080p-widescreen-nature-free-download.jpg" alt=""> -->
                        </div>
                        <div class="about-iteam">
                            <h4>The Amarkantak</h4>
                            <p>Amarkantak is a small town situated in the Indian state of Madhya Pradesh. It is known as the source of the holy river Narmada, which is considered to be one of the seven sacred rivers in Hinduism. The town is located at an altitude of 1065 meters and is surrounded by the Vindhya and Satpura mountain ranges. Amarkantak is a popular pilgrimage destination for Hindus, as there are several ancient temples dedicated to Lord Shiva, Vishnu, and the Narmada river.</p>
                        </div>
                    </div>
                    <div class="about-wrap">
                        <div class="about-iteam">
                            <p>Apart from its religious significance, Amarkantak is also famous for its natural beauty and biodiversity. The town is surrounded by dense forests and is home to several rare species of flora and fauna. The Sonmuda waterfall, Kapil Dhara waterfall, and Dugdhdhara waterfall are some of the major attractions in Amarkantak. The town is also a paradise for adventure enthusiasts as it offers several trekking trails, camping sites, and opportunities for wildlife spotting. Overall, Amarkantak is a perfect blend of spirituality, natural beauty, and adventure, making it a must-visit destination for travelers.</p>
                            <!-- <button>Read more</button> -->
                            <a href="gallery.php" target="blank"><button>View Gallery</button></a>
                        </div>
                        <div class="about-iteam">
                            <img src="img/about/<?php echo $a2img; ?>" alt="">                            
                            <!-- <img src="https://www.pixelstalk.net/wp-content/uploads/2016/07/HD-pictures-1080p-widescreen-nature-free-download.jpg" alt=""> -->
                        </div>
                    </div>
                    <!-- <div class="container" id="b-a-btn">
                        <a href=""><button>View Gallery</button></a>
                    </div> -->
                    <?php
                       include("about-carosul.php");
                    ?>
                    <!-- <div class="row" id="a-row">
                        <div class="col-xl-3 col-md-6 col-sm-12 my-4">
                            <div class="img">
                                <a href="gallery.php" target="blank">
                                    <img src="https://images.pexels.com/photos/572897/pexels-photo-572897.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12 my-4">
                            <div class="img">
                                <a href="gallery.php" target="blank">
                                    <img src="https://images.pexels.com/photos/572897/pexels-photo-572897.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12 my-4">
                            <div class="img">
                                <a href="gallery.php" target="blank">
                                    <img src="https://images.pexels.com/photos/572897/pexels-photo-572897.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12 my-4">
                            <div class="img">
                                <a href="gallery.php" target="blank">
                                    <img src="https://images.pexels.com/photos/572897/pexels-photo-572897.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                                </a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>