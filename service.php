<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("asset/head.php");
    ?>
</head>
<body>
    <div class="container-fluid p-0" id="service-container-fluid">
        <div class="container p-0" id="service-container">
            <div class="main-service">
                <div class="child-service">
                    <h2>Our Services</h2>
                    <div class="wrap-service">
                        <div class="service-item">
                            <div class="ser-con">
                                <img src="img/service/<?php echo $s1img; ?>" alt="">
                                <!-- <img src="https://images.pexels.com/photos/3184183/pexels-photo-3184183.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""> -->
                            </div>
                            <div class="ser-con">
                                <h5>Food Service</h5>
                                <p>Food service involves providing meals and beverages to customers in restaurants and other hospitality establishments.</p>
                                <a href="foodService.php" target="blank"><button>View More</button></a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="ser-con">
                                <img src="img/service/<?php echo $s2img; ?>" alt="">
                                <!-- <img src="https://images.pexels.com/photos/6474521/pexels-photo-6474521.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""> -->
                            </div>
                            <div class="ser-con">
                                <h5>Hotel Service</h5>
                                <p>Hotel service includes accommodation, food, and other amenities provided to guests during their stay.</p>
                                <a href="hotelService.php" target="blank"><button>View More</button></a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="ser-con">
                                <img src="img/service/<?php echo $s3img; ?>" alt="">
                                <!-- <img src="https://images.pexels.com/photos/3422964/pexels-photo-3422964.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""> -->
                            </div>
                            <div class="ser-con">
                                <h5>Vehicle Service</h5>
                                <p>Vehicle service includes maintenance, repair, and other services provided to keep vehicles in good working condition.</p>
                                <a href="vehicleService.php" target="blank"><button>View More</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="wrap-service">
                        <div class="service-item">
                            <div class="ser-con">
                                <img src="img/service/<?php echo $s4img; ?>" alt="">
                                <!-- <img src="https://images.pexels.com/photos/691637/pexels-photo-691637.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""> -->
                            </div>
                            <div class="ser-con">
                                <h5>Tour Guide</h5>
                                <p>Tour guide leads visitors on trips, providing information and commentary on the history, culture, and attractions.</p>
                                <a href="tourguide.php" target="blank"><button>View More</button></a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="ser-con">
                                <img src="img/service/<?php echo $s5img; ?>" alt="">
                                <!-- <img src="https://images.pexels.com/photos/996954/pexels-photo-996954.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""> -->
                            </div>
                            <div class="ser-con">
                                <h5>Bus Service</h5>
                                <p>Bus service provides transportation to passengers along designated routes, often with scheduled stops at specific locations.</p>
                                <a href="bus-service.php" target="blank"><button>View More</button></a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="ser-con">
                                <img src="img/service/<?php echo $s6img; ?>" alt="">
                                <!-- <img src="https://images.pexels.com/photos/72594/japan-train-railroad-railway-72594.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""> -->
                            </div>
                            <div class="ser-con">
                                <h5>Train Service</h5>
                                <p>Train service provides transportation on rails, often with multiple stops along a designated route.</p>
                                <a href="https://www.irctc.co.in/" target="blank"><button>View More</button></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>