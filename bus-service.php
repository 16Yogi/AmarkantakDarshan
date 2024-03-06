<!DOCTYPE html>
<html lang="en">
<head>
    <?php
       include("asset/head.php");
    ?>
</head>
<body>
    <?php
       include("headderService.php")
    ?>
    <!-- banner -->
    <div class="container-fluid p-0" id="bsm-container-fluid" style="background-image:url('img/banner/<?php echo $b7img; ?>');">
        <div class="container-fluid p-0" id="bgclr">
            <div class="container" id="bsm-container">
                <h3>Bus Service</h3>
                <p><a href="index.php" target="blank">Home</a> / <a href="aboutMain.php" target="blank">About</a> / <a href="gallery.php" target="blank">Gallery</a></p>
            </div>
        </div>
    </div>
    <!-- end banner -->

    <div class="container-fluid" id="fooditem-container-fluid">
        <div class="container" id="fooditem-container">
            <h3> Hey! <span>There is your bus</span><i class="fa-solid fa-face-smile"></i></h3>
            <div class="jumbotron">
                <table class="table">
                    <h4 class="text-center">Bus Details</h4>
                    <h5 class="py-2 text-info">Pendra to Amarkantak</h5>
                    <thead class="bg-info">
                        <tr>
                            <th scope="col">Bus Name</th>
                            <th scope="col">Bus Number</th>
                            <th scope="col">Time</th>
                            <th scope="col">Fare</th>
                            <th scope="col">Mo. Number</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                            <th scope="row">Jaisawal</th>
                            <td>MP04 MD 7896</td>
                            <td>1:00 PM</td>
                            <td>70</td>
                            <td>7896541230</td>
                        </tr>
                        <tr>
                            <th scope="row">Asatha</th>
                            <td>MP04 MD 7896</td>
                            <td>1:00 PM</td>
                            <td>70</td>
                            <td>7896541230</td>
                        </tr>
                        <tr>
                            <th scope="row">Ram Ram Chirri</th>
                            <td>MP04 MD 7896</td>
                            <td>1:00 PM</td>
                            <td>70</td>
                            <td>7896541230</td>
                        </tr>
                        <tr>
                            <th scope="row">Pushkar</th>
                            <td>MP04 MD 7896</td>
                            <td>1:00 PM</td>
                            <td>70</td>
                            <td>7896541230</td>
                        </tr>
                        <tr>
                            <th scope="row">Gopal</th>
                            <td>MP04 MD 7896</td>
                            <td>1:00 PM</td>
                            <td>70</td>
                            <td>7896541230</td>
                        </tr>
                    </tbody>
               </table>
               <table class="table">
                    <h5 class="py-2 text-info">Amarkantak To Pendra</h5>
                    <thead class="bg-info">
                        <tr>
                            <th scope="col">Bus Name</th>
                            <th scope="col">Bus Number</th>
                            <th scope="col">Time</th>
                            <th scope="col">Fare</th>
                            <th scope="col">Mo. Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Jaisawal</th>
                            <td>MP04 MD 7896</td>
                            <td>1:00 PM</td>
                            <td>70</td>
                            <td>7896541230</td>
                        </tr>
                        <tr>
                            <th scope="row">Asatha</th>
                            <td>MP04 MD 7896</td>
                            <td>1:00 PM</td>
                            <td>70</td>
                            <td>7896541230</td>
                        </tr>
                        <tr>
                            <th scope="row">Ram Ram Chirri</th>
                            <td>MP04 MD 7896</td>
                            <td>1:00 PM</td>
                            <td>70</td>
                            <td>7896541230</td>
                        </tr>
                        <tr>
                            <th scope="row">Pushkar</th>
                            <td>MP04 MD 7896</td>
                            <td>1:00 PM</td>
                            <td>70</td>
                            <td>7896541230</td>
                        </tr>
                        <tr>
                            <th scope="row">Gopal</th>
                            <td>MP04 MD 7896</td>
                            <td>1:00 PM</td>
                            <td>70</td>
                            <td>7896541230</td>
                        </tr>
                    </tbody>
               </table>
            </div>
        </div>
    </div>
    <?php
       include("map.php");
       include("impLinks.php");
       include("footer.php");
    ?>
</body>
</html>