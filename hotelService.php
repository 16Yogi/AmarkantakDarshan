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
    <div class="container-fluid p-0" id="bsm-container-fluid" style="background-image:url('img/banner/<?php echo $b4img; ?>');">
        <div class="container-fluid p-0" id="bgclr">
            <div class="container" id="bsm-container">
                <h3>Hotel Service</h3>
                <p><a href="index.php" target="blank">Home</a> / <a href="aboutMain.php" target="blank">About</a> / <a href="gallery.php" target="blank">Gallery</a></p>
            </div>
        </div>
    </div>
    <!-- banner end -->
    
    <div class="container-fluid p-0" id="food-container-fluid">
        <div class="container p-0" id="food-container">
            <!-- <h3>Your Hotel</h3> -->
            <h3> Hey! <span>Here is your Hotel </span><i class="fa-solid fa-face-smile"></i></h3>
            <div class="main-food">
                <div class="child-food">
                    <div class="wrap-food">
                        <div class="food-item">
                            <div class="food-a">
                                <img src="https://images.pexels.com/photos/2017802/pexels-photo-2017802.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                            </div>
                            <div class="food-a">
                                <p>Holiday Homes</p>
                                <p>MP Tourism Amarkantak </p>
                            </div>
                            <div class="food-a">
                                <div class="a">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModala">Contact now</button>
                                </div>
                                <div class="a">
                                    <button type="button" class="btn btn-primary"><a href="https://www.mpstdc.com/" target="blank">Hotel Profile</a></button>
                                </div>
                            </div>
                        </div>
                        <!-- The Modal -->
                        <div class="modal fade" id="myModala">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Holiday Homes</h4>
                                        <!-- <h5 class="modal-title">Holiday Homes</h5> -->
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <p><strong>Manager-</strong>Mohan Lal Sharma</p>
                                        <p><strong>Owner Name-</strong>Lorem, ipsum.</p>
                                        <p><strong>Mob. Number-</strong>9874563210, 9111401044</p>
                                        <p><strong>Ph. Number-</strong>0762-9269416</p>
                                        <p><strong>E-mail-</strong>hhamarkantak@mp.gov.in</p>
                                        <p><strong>Address-</strong>MP Tourism, Holiday Homes Amarkantak, Dist- Anuppur - 484886</p>
                                    </div>
                                    
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info" data-dismiss="modal"><a href="https://www.mpstdc.com/" class="text-decoration-none text-white" target="blank">Conform</a></button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>                    
                    

                        <div class="food-item">
                            <div class="food-a">
                                <img src="https://images.pexels.com/photos/59924/pexels-photo-59924.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                            </div>
                            <div class="food-a">
                                <p>Hotel Amarkantak Inn</p>
                                <p>Main Road, Amarkantak(MP)</p>
                            </div>
                            <div class="food-a">
                                <div class="a">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalb">Contact now</button>
                                </div>
                                <div class="a">
                                    <!-- <button>Order now</button> -->
                                    <button type="button" class="btn btn-primary"><a href="https://www.amarkantakinn.com/" target="blank">Hotel Profile</a></button>
                                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal">Hotel Profile</button> -->
                                </div>
                            </div>
                        </div>
                        <!-- The Modal -->
                        <div class="modal fade" id="myModalb">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Hotel AMarkantak Inn</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <p><strong>Manager-</strong>Dharmendra Soni</p>
                                        <p><strong>Mob. Number-</strong>9424441234, 6232265365</p>
                                        <p><strong>Email-</strong>hotelamarkantakin@gmail.com</p>
                                        <p><strong>Address-</strong>Main Road, AMarkantak</p>
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
                                <img src="https://images.pexels.com/photos/1591361/pexels-photo-1591361.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                            </div>
                            <div class="food-a">
                                <p>Aatitheyam Yatri Niwas</p>
                                <p>Main Road Amarkantak</p>
                            </div>
                            <div class="food-a">
                                <div class="a">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalc">Contact now</button>
                                </div>
                                <div class="a">
                                    <!-- <button>Order now</button> -->
                                    <button type="button" class="btn btn-primary"><a href="https://www.amarkantakinn.com/" target="blank">Hotel Profile</a></button>
                                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal">Hotel Profile</button> -->
                                </div>
                            </div>
                        </div>
                        <!-- The Modal -->
                        <div class="modal fade" id="myModalc">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Aatitheyam Yatri Niwas</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <p><strong>Manager-</strong>Lorem, ipsum.</p>
                                        <p><strong>Mob. Number-</strong>9425671979, 9111787710</p>
                                        <p><strong>Email-</strong>atitheyam@gmail.com</p>
                                        <p><strong>Address-</strong>Main Road Amarkantak</p>
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

                    <div class="wrap-food">
                        <div class="food-item">
                            <div class="food-a">
                                <img src="https://images.pexels.com/photos/2057610/pexels-photo-2057610.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                            </div>
                            <div class="food-a">
                                <p>Sarvodaya Vishram Griha</p>
                                <p>Near Narmada Temple, Amarkantak</p>
                            </div>
                            <div class="food-a">
                                <!-- <div class="a">
                                    <h4><strong>RS-200/-</strong></h4>
                                </div>
                                <div class="a">
                                    <button>Order now</button>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModald">Order now</button>
                                </div> -->
                                <div class="a">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModald">Contact now</button>
                                </div>
                                <div class="a">
                                    <!-- <button>Order now</button> -->
                                    <button type="button" class="btn btn-primary"><a href="https://www.amarkantakinn.com/" target="blank">Hotel Profile</a></button>
                                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal">Hotel Profile</button> -->
                                </div>
                            </div>
                        </div>
                        <!-- The Modal -->
                        <div class="modal fade" id="myModald">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Sarvodaya Vishram Griha</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <p><strong>Manager-</strong>Lorem, ipsum.</p>
                                        <p><strong>Mob. Number-</strong>9425331192,7987181255</p>
                                        <p><strong>Ph. Number-</strong>07629-269517</p>
                                        <p><strong>Address-</strong>Near Narmada Temple, Amarkantak, Dist- Anuppur(MP) - 484886</p>

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
                                <img src="https://images.pexels.com/photos/1082326/pexels-photo-1082326.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                            </div>
                            <div class="food-a">
                                <p>Shree Mata Sadan</p>
                                <p>Sounmuda Road Amarkantak</p>
                            </div>
                            <div class="food-a">
                                <!-- <div class="a">
                                    <h4><strong>RS-200/-</strong></h4>
                                </div>
                                <div class="a">
                                    <button>Order now</button>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModale">Order now</button>
                                </div> -->
                                <div class="a">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModale">Contact now</button>
                                </div>
                                <div class="a">
                                    <!-- <button>Order now</button> -->
                                    <button type="button" class="btn btn-primary"><a href="https://www.amarkantakinn.com/" target="blank">Hotel Profile</a></button>
                                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal">Hotel Profile</button> -->
                                </div>
                            </div>
                        </div>
                        <!-- The Modal -->
                        <div class="modal fade" id="myModale">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Shree Mata Sadan</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <p><strong>Owner Name-</strong>Lorem, ipsum.</p>
                                        <p><strong>Mob.-</strong>9993914486, 9630371979</p>
                                        <p><strong>Address-</strong>Sounmuda Road Amarkantak Dist- Anuppur(MP)</p>
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
                                <img src="https://images.pexels.com/photos/1103808/pexels-photo-1103808.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                            </div>
                            <div class="food-a">
                                <p>The Residency Home Stay</p>
                                <p>Sounmuda Road Amarkantak</p>
                            </div>
                            <div class="food-a">
                            <div class="a">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalf">Contact now</button>
                                </div>
                                <div class="a">
                                    <!-- <button>Order now</button> -->
                                    <button type="button" class="btn btn-primary"><a href="https://www.amarkantakinn.com/" target="blank">Hotel Profile</a></button>
                                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal">Hotel Profile</button> -->
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
                                    <h4 class="modal-title">The Residency Home Stay</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <p><strong>Owner Name-</strong>Lorem, ipsum.</p>
                                    <p><strong>Mob. Number-</strong>9425180607</p>
                                    <p><strong>Address-</strong>Sounmuda Road AMarkantak Dist- Anuppur (MP)</p>
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