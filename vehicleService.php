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
    <?php
    //    include("headder.php");
    //    include("banner-secation.php");
    ?>
     <!-- banner -->
     <div class="container-fluid p-0" id="bsm-container-fluid" style="background-image:url('img/banner/<?php echo $b5img; ?>');">
        <div class="container-fluid p-0" id="bgclr">
            <div class="container" id="bsm-container">
                <h3>Vehicle Service</h3>
                <p><a href="index.php">Home</a> / <a href="aboutMain.php">About</a> / <a href="gallery.php">Gallery</a></p>
            </div>
        </div>
    </div>
    <!-- banner end -->
    <div class="container-fluid p-0" id="food-container-fluid">
        <div class="container p-0" id="food-container">
            <!-- <h3>Your Vehicle</h3> -->
            <h3> Hey! <span>Which vehicle you want ? </span><i class="fa-solid fa-face-smile"></i></h3>
            <div class="main-food">
                <div class="child-food">
                    <div class="wrap-food">
                        <div class="food-item">
                            <div class="food-a">
                                <img src="https://images.pexels.com/photos/116675/pexels-photo-116675.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                            </div>
                            <div class="food-a">
                                <p>Lorem ipsum dolor sit.</p>
                                <p>Lorem ipsum dolor sit.</p>
                            </div>
                            <div class="food-a">
                                <!-- <div class="a">
                                    <h4><strong>RS-200/-</strong></h4>
                                </div> -->
                                <div class="a">
                                    <!-- <button>Book now</button> -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModala">Book now</button>

                                </div>
                            </div>
                        </div>
                        <!-- The Modal -->
                        <div class="modal fade" id="myModala">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Booking Details1</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <p><strong>Vehicle-</strong>Lorem, ipsum.</p>
                                        <p><strong>Owner Name-</strong>Lorem, ipsum.</p>
                                        <p><strong>Contact Number-</strong>9874563210</p>
                                        <p><strong>Price-</strong>Rs-400/-</p>
                                    </div>
                                    
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info" data-dismiss="modal">Conform</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>

                        <div class="food-item">
                            <div class="food-a">
                                <img src="https://images.pexels.com/photos/240222/pexels-photo-240222.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                            </div>
                            <div class="food-a">
                                <p>Lorem ipsum dolor sit.</p>
                                <p>Lorem ipsum dolor sit.</p>
                            </div>
                            <div class="food-a">
                                <!-- <div class="a">
                                    <h4><strong>RS-200/-</strong></h4>
                                </div> -->
                                <div class="a">
                                    <!-- <button>Book now</button> -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalb">Book now</button>

                                </div>
                            </div>
                        </div>
                        <!-- The Modal -->
                        <div class="modal fade" id="myModalb">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Booking Details2</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <p><strong>Vehicle-</strong>Lorem, ipsum.</p>
                                        <p><strong>Owner Name-</strong>Lorem, ipsum.</p>
                                        <p><strong>Contact Number-</strong>9874563210</p>
                                        <p><strong>Price-</strong>Rs-400/-</p>
                                    </div>
                                    
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info" data-dismiss="modal">Conform</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                        
                        <div class="food-item">
                            <div class="food-a">
                                <img src="https://images.pexels.com/photos/119435/pexels-photo-119435.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                            </div>
                            <div class="food-a">
                                <p>Lorem ipsum dolor sit.</p>
                                <p>Lorem ipsum dolor sit.</p>
                            </div>
                            <div class="food-a">
                                <!-- <div class="a">
                                    <h4><strong>RS-200/-</strong></h4>
                                </div> -->
                                <div class="a">
                                    <!-- <button>Book now</button> -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalc">Book now</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- The Modal -->
                    <div class="modal fade" id="myModalc">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Booking Details3</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <p><strong>Vehicle-</strong>Lorem, ipsum.</p>
                                    <p><strong>Owner Name-</strong>Lorem, ipsum.</p>
                                    <p><strong>Contact Number-</strong>9874563210</p>
                                    <p><strong>Price-</strong>Rs-400/-</p>
                                </div>
                                
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info" data-dismiss="modal">Conform</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                </div>
                              
                            </div>
                        </div>
                    </div>

                    <div class="wrap-food">
                        <div class="food-item">
                            <div class="food-a">
                                <img src="https://images.pexels.com/photos/849835/pexels-photo-849835.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                            </div>
                            <div class="food-a">
                                <p>Lorem ipsum dolor sit.</p>
                                <p>Lorem ipsum dolor sit.</p>
                            </div>
                            <div class="food-a">
                                <!-- <div class="a">
                                    <h4><strong>RS-200/-</strong></h4>
                                </div> -->
                                <div class="a">
                                    <!-- <button>Book now</button> -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModald">Book now</button>

                                </div>
                            </div>
                        </div>
                        <!-- The Modal -->
                        <div class="modal fade" id="myModald">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Booking Details4</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <p><strong>Vehicle-</strong>Lorem, ipsum.</p>
                                        <p><strong>Owner Name-</strong>Lorem, ipsum.</p>
                                        <p><strong>Contact Number-</strong>9874563210</p>
                                        <p><strong>Price-</strong>Rs-400/-</p>
                                    </div>
                                    
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info" data-dismiss="modal">Conform</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>

                        <div class="food-item">
                            <div class="food-a">
                                <img src="https://images.pexels.com/photos/1413412/pexels-photo-1413412.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                            </div>
                            <div class="food-a">
                                <p>Lorem ipsum dolor sit.</p>
                                <p>Lorem ipsum dolor sit.</p>
                            </div>
                            <div class="food-a">
                                <!-- <div class="a">
                                    <h4><strong>RS-200/-</strong></h4>
                                </div> -->
                                <div class="a">
                                    <!-- <button>Book now</button> -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModale">Book now</button>
                                </div>
                            </div>
                        </div>
                        <!-- The Modal -->
                        <div class="modal fade" id="myModale">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Booking Details5</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <p><strong>Vehicle-</strong>Lorem, ipsum.</p>
                                        <p><strong>Owner Name-</strong>Lorem, ipsum.</p>
                                        <p><strong>Contact Number-</strong>9874563210</p>
                                        <p><strong>Price-</strong>Rs-400/-</p>
                                    </div>
                                    
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info" data-dismiss="modal">Conform</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>

                        <div class="food-item">
                            <div class="food-a">
                                <img src="https://images.pexels.com/photos/1134857/pexels-photo-1134857.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                            </div>
                            <div class="food-a">
                                <p>Lorem ipsum dolor sit.</p>
                                <p>Lorem ipsum dolor sit.</p>
                            </div>
                            <div class="food-a">
                                <!-- <div class="a">
                                    <h4><strong>RS-200/-</strong></h4>
                                </div> -->
                                <div class="a">
                                    <!-- <button>Book now</button> -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalf">Book now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- The Modal -->
                    <div class="modal fade" id="myModalf">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Booking Details6</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <p><strong>Vehicle-</strong>Lorem, ipsum.</p>
                                    <p><strong>Owner Name-</strong>Lorem, ipsum.</p>
                                    <p><strong>Contact Number-</strong>9874563210</p>
                                    <p><strong>Price-</strong>Rs-400/-</p>
                                </div>
                                
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info" data-dismiss="modal">Conform</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                </div>
                              
                            </div>
                        </div>
                    </div>

                    <div class="wrap-food">
                        <div class="food-item">
                            <div class="food-a">
                                <img src="https://images.pexels.com/photos/811034/pexels-photo-811034.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                            </div>
                            <div class="food-a">
                                <p>Lorem ipsum dolor sit.</p>
                                <p>Lorem ipsum dolor sit.</p>
                            </div>
                            <div class="food-a">
                                <!-- <div class="a">
                                    <h4><strong>RS-200/-</strong></h4>
                                </div> -->
                                <div class="a">
                                    <!-- <button>Book now</button> -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalg">Book now</button>
                                </div>
                            </div>
                        </div>
                        <!-- The Modal -->
                        <div class="modal fade" id="myModalg">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Booking Details7</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <p><strong>Vehicle-</strong>Lorem, ipsum.</p>
                                        <p><strong>Owner Name-</strong>Lorem, ipsum.</p>
                                        <p><strong>Contact Number-</strong>9874563210</p>
                                        <p><strong>Price-</strong>Rs-400/-</p>
                                    </div>
                                    
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info" data-dismiss="modal">Conform</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                        
                        <div class="food-item">
                            <div class="food-a">
                                <img src="https://images.pexels.com/photos/2303781/pexels-photo-2303781.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                            </div>
                            <div class="food-a">
                                <p>Lorem ipsum dolor sit.</p>
                                <p>Lorem ipsum dolor sit.</p>
                            </div>
                            <div class="food-a">
                                <!-- <div class="a">
                                    <h4><strong>RS-200/-</strong></h4>
                                </div> -->
                                <div class="a">
                                    <!-- <button>Book now</button> -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalh">Book now</button>
                                </div>
                            </div>
                        </div>
                        <!-- The Modal -->
                        <div class="modal fade" id="myModalh">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Booking Details8</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <p><strong>Vehicle-</strong>Lorem, ipsum.</p>
                                        <p><strong>Owner Name-</strong>Lorem, ipsum.</p>
                                        <p><strong>Contact Number-</strong>9874563210</p>
                                        <p><strong>Price-</strong>Rs-400/-</p>
                                    </div>
                                    
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info" data-dismiss="modal">Conform</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>

                        <div class="food-item">
                            <div class="food-a">
                                <img src="https://images.pexels.com/photos/3156482/pexels-photo-3156482.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                            </div>
                            <div class="food-a">
                                <p>Lorem ipsum dolor sit.</p>
                                <p>Lorem ipsum dolor sit.</p>
                            </div>
                            <div class="food-a">
                                <!-- <div class="a">
                                    <h4><strong>RS-200/-</strong></h4>
                                </div> -->
                                <div class="a">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModali">Book now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- The Modal -->
                    <div class="modal fade" id="myModali">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Booking Details9</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <p><strong>Vehicle-</strong>Lorem, ipsum.</p>
                                    <p><strong>Owner Name-</strong>Lorem, ipsum.</p>
                                    <p><strong>Contact Number-</strong>9874563210</p>
                                    <p><strong>Price-</strong>Rs-400/-</p>
                                </div>
                                
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info" data-dismiss="modal">Conform</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
    <?Php
        include("event.php");
    ?>
    
    <?php
       include("impLinks.php");
       include("footer.php");
    ?>
</body>
</html>