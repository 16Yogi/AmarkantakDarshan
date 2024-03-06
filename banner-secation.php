<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("asset/head.php");
    ?>
</head>
<body>
    <div class="container-fluid p-0" id="banner-container-fluid" style="background-image:url('img/banner/<?php echo $bimg; ?>');">
        <div class="container-fluid" id="bn-bg">
            <div class="main-banner">
                <div class="child-banner">
                    <div class="banner-wrap">
                        <div class="banner-item">
                            <h2>Welcome to <span>Amarkantak !</span></h2>
                            <p>Amarkantak is a holy town located at the source of the Narmada River. It is surrounded by lush forests, waterfalls and is a trekker's paradise.</p>
                        </div>
                        <div class="banner-item">
                            <a href="aboutMain.php" target="blank"><button>Read More</button></a>
                            <a href="" data-target="#myModal" data-toggle="modal"><button>Join us</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======================== SIGN IN PAGE ========================= -->
    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
      
        <!-- Modal Header -->
                <div class="modal-header">
                    <b>Login</b>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
        
        <!-- Modal body -->
                <div class="modal-body">
                    <form action="" class="py-2">
                        <input type="username" placeholder="USERNAME">
                        <input type="password" placeholder="PAASSWORD">
                        <span>
                            <a href="#">Forget password</a>
                            &nbsp&nbsp
                            <a href="createAc.php">Create Account</a>
                        </span>
                        <input type="submit" class="btn btn-primary mb-2" data-dismiss="modal" value="Login" id="btnsub">
                    <!-- <button type="submit" class="btn btn-primary mb-2" data-dismiss="modal">Submit</button> -->
                    </form>
                    <div class="link">
                        <div class="a"><i class="fa-brands fa-google"></i></div>
                        <div class="a"><i class="fa-brands fa-facebook-f"></i></div>
                        <div class="a"><i class="fa-brands fa-linkedin-in"></i></div>
                    </div>
                </div>
        
        <!-- Modal footer -->
                <div class="modal-footer">
                </div>
            
            </div>
        </div>
    </div>
</body>
</html>

