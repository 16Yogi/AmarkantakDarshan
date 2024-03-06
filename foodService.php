<!DOCTYPE html>
<html lang="en">
<head>
    <?php
       include("asset/head.php");
    ?>
</head>
<body>
    
    <?php
       include("headderService.php");
    ?>
    <!-- banner -->
    <div class="container-fluid p-0" id="bsm-container-fluid" style="background-image:url('img/banner/<?php echo $b3img; ?>');">
        <div class="container-fluid p-0" id="bgclr">
            <div class="container" id="bsm-container">
                <h3>Food Service</h3>
                <p><a href="index.php" target="blank">Home</a> / <a href="aboutMain.php" target="blank">About</a> / <a href="gallery.php" target="blank">Gallery</a></p>
            </div>
        </div>
    </div>
    <!-- banner end -->
    <?php
    //    include("banner-secation.php");

    //    include("asset/connection.php");     
    ?>
    
    <div class="container-fluid p-0" id="food-container-fluid">
        <div class="container p-0" id="food-container">
            <h3> Hey! <span>Enjoy your food </span><i class="fa-solid fa-face-smile"></i></h3>
            <div class="main-food">
                <div class="child-food">
                    <div class="wrap-food">
                        <div class="food-item">
                            <div class="food-a">
                                <img src="https://images.pexels.com/photos/735869/pexels-photo-735869.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                            </div>
                            <div class="food-a">
                                <p>Sarvodaya Restaurants</p>
                                <p>Near Narmada Temple, Amarkantak</p>
                            </div>
                            <div class="food-a">
                                <div class="a">
                                   <button type="button" class="btn btn-primary"><a href="viewMenu.php" target="blank">View Menu</a></button>
                                </div>
                                <div class="a">
                                   <button type="button" class="btn btn-primary" ><a href="restorentprofile.php?id=<?php echo 'OYO';?>">Hotel Profile</a></button>
                                </div>
                            </div>
                        </div>
                        <!-- The Modal
                        <div class="modal fade" id="myModala">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                
                                    Modal Header
                                    <div class="modal-header">
                                        <h4 class="modal-title">Booking Details1</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    Modal body
                                    <div class="modal-body">
                                        <p><strong>Vehicle-</strong>Lorem, ipsum.</p>
                                        <p><strong>Owner Name-</strong>Lorem, ipsum.</p>
                                        <p><strong>Contact Number-</strong>9874563210</p>
                                        <p><strong>Price-</strong>Rs-400/-</p>
                                    </div>
                                    
                                    Modal footer
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info" data-dismiss="modal">Conform</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>  -->

                        <div class="food-item">
                            <div class="food-a">
                                <img src="https://images.pexels.com/photos/958545/pexels-photo-958545.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                            </div>
                            <div class="food-a">
                                <p>Gupta G Dhaba</p>
                                <p>Dindori Road, Amarkantak</p>
                            </div>
                            <div class="food-a">
                                <div class="a">
                                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModala">View Menu</button>
                                </div>
                                <div class="a">
                                   <button type="button" class="btn btn-primary"><a href="restorentprofile.phpid=<?php echo 'Amarkantak';?>" target="blank">Hotel Profile</a></button>
                                </div>
                            </div>
                        </div>
                        <!-- The Modal -->
                        <!-- <div class="modal fade" id="myModalb">
                            <div class="modal-dialog">
                                <div class="modal-content"> -->
                                
                                    <!-- Modal Header -->
                                    <!-- <div class="modal-header">
                                        <h4 class="modal-title">Booking Details2</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div> -->
                                    
                                    <!-- Modal body -->
                                    <!-- <div class="modal-body">
                                        <p><strong>Vehicle-</strong>Lorem, ipsum.</p>
                                        <p><strong>Owner Name-</strong>Lorem, ipsum.</p>
                                        <p><strong>Contact Number-</strong>9874563210</p>
                                        <p><strong>Price-</strong>Rs-400/-</p>
                                    </div> -->
                                    
                                    <!-- Modal footer -->
                                    <!-- <div class="modal-footer">
                                        <button type="button" class="btn btn-info" data-dismiss="modal">Conform</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                    </div> -->
                                  
                                <!-- </div>
                            </div>
                        </div>  -->

                        <div class="food-item">
                            <div class="food-a">
                                <img src="https://images.pexels.com/photos/1640772/pexels-photo-1640772.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                            </div>
                            <div class="food-a">
                                <p>Amarkantak Restorent</p>
                                <p>Main Road Amarkantak</p>
                            </div>
                            <div class="food-a">
                                <div class="a">
                                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModala">View Menu</button>
                                </div>
                                <div class="a">
                                   <button type="button" class="btn btn-primary"><a href="restorentprofile.php" target="blank">Hotel Profile</a></button>
                                </div>
                            </div>
                        </div> 
                    </div>

                    <div class="wrap-food">
                        <div class="food-item">
                            <div class="food-a">
                                <img src="https://images.pexels.com/photos/1640774/pexels-photo-1640774.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                            </div>
                            <div class="food-a">
                                <p>Yadav Restorent and Bhojnalay</p>
                                <p>Kapildhara, Amarkantak (MP)</p>
                            </div>
                            <div class="food-a">
                                <div class="a">
                                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModala">View Menu</button>
                                </div>
                                <div class="a">
                                   <button type="button" class="btn btn-primary"><a href="restorentprofile.php" target="blank">Hotel Profile</a></button>
                                </div>
                            </div>
                        </div> 

                        <div class="food-item">
                            <div class="food-a">
                                <img src="https://images.pexels.com/photos/2097090/pexels-photo-2097090.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                            </div>
                            <div class="food-a">
                                <p>Yadav Bhojnalay</p>
                                <p>Kapildhara</p>
                            </div>
                            <div class="food-a">
                                <div class="a">
                                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModala">View Menu</button>
                                </div>
                                <div class="a">
                                   <button type="button" class="btn btn-primary"><a href="restorentprofile.php" target="blank">Hotel Profile</a></button>
                                </div>
                            </div>
                        </div>

                        <div class="food-item">
                            <div class="food-a">
                                <img src="https://images.pexels.com/photos/1639556/pexels-photo-1639556.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                            </div>
                            <div class="food-a">
                                <p>Maikal Restorent</p>
                                <p>Main Road Amarkantak</p>
                            </div>
                            <div class="food-a">
                                <div class="a">
                                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModala">View Menu</button>
                                </div>
                                <div class="a">
                                   <button type="button" class="btn btn-primary"><a href="restorentprofile.php" target="blank">Hotel Profile</a></button>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
//    }
?>
    <?Php
        include("event.php");
    ?>
    
    <?php
       include("impLinks.php");
       include("footer.php");
    ?>
</body>
</html>