<?php
    // include("asset/connection.php");
    // include("asset/insert.php");
    // include("asset/select.php");
    // include("asset/update.php");

    include("API/login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
       include("asset/head.php");
    ?>
</head>
<body>
    <div class="container-fluid bg-dark navbar-dark p-0" id="headder-nav-cf">
        <div class="container p-0" id="headder-nav-c">
            <nav class="navbar navbar-expand-md">
                <div class="main-header">
                    <div class="child-header">
                        <div class="nav-wrap">
                            <div class="nav-item" >
                                <a href="index.php"><img src="img/logo.png" alt=""></a>
                                <!-- <h1><a href="index.php">Amarkatak <span>Darshan</span></a></h1> -->
                            </div>
                            <div class="nav-item p-0 m-0" id="nav-itemb">
                                <ul>
                                    <a href="index.php"><li>Home</li></a>
                                    <a href="#about-container-fluid"><li>About us</li></a>
                                    <a href="#service-container-fluid"><li>Service</li></a>
                                    <a href="#contact"><li>Contact</li></a>
                                    <a href="" data-target="#myModal" data-toggle="modal"><li>Login</li></a>
                                </ul>
                            </div>
                            <div class="res" id="resa">
                                <i class="fa-solid fa-bars" id="open" onclick="onOpne()"></i>
                                <i class="fa-solid fa-xmark" id="close"onclick="onClose()"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
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
                    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data" class="py-2">
                        <input type="username" name="urname" placeholder="MOBILE/EMAIL">
                        <input type="password" name="urpass" placeholder="PASSWORD">
                        <span>
                            <a href="" data-target="#fModalaa" data-toggle="modal" onclick="signupOpen()">Forget password</a>
                            &nbsp&nbsp 
                            <a href="" data-target="#myModalaa" data-toggle="modal" onclick="signupOpen()">Create Account</a>
                        </span>
                        <input type="submit" name="login" class="btn btn-primary mb-2" value="Login" id="btnsub">
                    <!-- <button type="submit" class="btn btn-primary mb-2" data-dismiss="modal">Submit</button> -->
                    </form>
                    <div class="link">
                        <?php
                            echo "<a href='".$client->createAuthUrl()."'>
                                    <div class='a'><i class='fa-brands fa-google' name='gurlogin'></i></div>
                                   </a>";
                        ?>
                        <!-- <div class="a"><i class="fa-brands fa-google"></i></div> -->
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
    
    <!-- ======================== SIGN UP PAGE ========================= -->
    <!-- The Modal -->
    <div class="modal fade" id="myModalaa">
        <div class="modal-dialog">
            <div class="modal-content">
      
        <!-- Modal Header -->
                <div class="modal-header">
                    <b>Sign Up</b>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
        
        <!-- Modal body -->
                <div class="modal-body">
                    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data" class="py-2">
                        <input type="fname" name="fname" placeholder="FULL NAME">
                        <input type="text" name="mobemail" placeholder="MOBILE/EMAIL">
                        <input type="password" name="password" placeholder="PASSWORD">
                        <input type="password" name="repassword" placeholder="RE-PASSWORD">
                        <span>
                            <a href="" data-target="#fModalaa" data-toggle="modal" onclick="signupOpen()">Forget password</a>
                            &nbsp&nbsp
                        </span>
                        <input type="submit" name="submitsingup" class="btn btn-primary mb-2" onclick="signupClose()" value="Sign Up" id="btnsub">
                    <!-- <button type="submit" class="btn btn-primary mb-2" data-dismiss="modal">Submit</button> -->
                    </form>
                    <div class="link">
                        <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data" class="py-2">
                            <?php
                                echo "<a href='".$client->createAuthUrl()."'>
                                        <div class='a'><i class='fa-brands fa-google' name='gurlogin'></i></div>
                                        </a>";
                            ?>
                            <!-- <div class="a"><i class="fa-brands fa-google" name="gurlogin"></i></div> -->
                            <div class="a"><i class="fa-brands fa-facebook-f"></i></div>
                            <div class="a"><i class="fa-brands fa-linkedin-in"></i></div>
                        </form>
                    </div>
                </div>
        
        <!-- Modal footer -->
                <div class="modal-footer">
                </div>
            
            </div>
        </div>
    </div>
    
    <!-- forget Password -->
    <!-- ======================== Forget password PAGE ========================= -->
    <!-- The Modal -->
    <div class="modal fade" id="fModalaa">
        <div class="modal-dialog">
            <div class="modal-content">
      
        <!-- Modal Header -->
                <div class="modal-header">
                    <b>Foget Password</b>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
        
        <!-- Modal body -->
                <div class="modal-body">
                    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data" class="py-2">
                        <input type="text" name="fmobemail" placeholder="MOBILE/EMAIL">
                        <input type="password" name="fpassword" placeholder="PASSWORD">
                        <input type="password" name="frepassword" placeholder="RE-PASSWORD">
                        <!-- <span>
                            <a href="#">Forget password</a>
                            &nbsp&nbsp
                        </span> -->
                        <input type="submit" name="fsubmitsingup" class="btn btn-primary mb-2" onclick="signupClose()" value="Submitted" id="btnsub">
                    <!-- <button type="submit" class="btn btn-primary mb-2" data-dismiss="modal">Submit</button> -->
                    </form>
                    <div class="link">
                        <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data" class="py-2">
                            <?php
                                echo "<a href='".$client->createAuthUrl()."'>
                                        <div class='a'><i class='fa-brands fa-google' name='gurlogin'></i></div>
                                        </a>";
                            ?>
                            <!-- <div class="a"><i class="fa-brands fa-google" name="gurlogin"></i></div> -->
                            <div class="a"><i class="fa-brands fa-facebook-f"></i></div>
                            <div class="a"><i class="fa-brands fa-linkedin-in"></i></div>
                        </form>
                    </div>
                </div>
        
        <!-- Modal footer -->
                <div class="modal-footer">
                </div>
            
            </div>
        </div>
    </div>
    
    
    
    <!-- ================ js file ================= -->
    <script src="js/headder.js"></script>
    <script src="js/form.js"></script>

</body>
</html>