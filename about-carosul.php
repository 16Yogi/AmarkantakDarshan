<?php
   include("asset/connection.php");
   include("asset/insert.php");
   include("asset/update.php");
   include("asset/select.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
       include("asset/head.php");
    ?>
</head>
<body>
    <div class="container-fluid p-0" id="container-fluid-team">
        <div class="container p-0" id="container-team">
            <div class="mainTeam">
                <div class="childTeam">
                    <div class="wrapTeam">
                        <div class="teamSlider responsive">
                            <div class="itemTeam">
                                <div class="team-a">
                                    <a href="gallery.php" target="blank">
                                        <img src="img/gallery/<?php echo $g1img; ?>" alt="">
                                    </a>
                                </div>    
                            </div>
                            <div class="itemTeam">
                                <div class="team-a">
                                    <a href="gallery.php" target="blank">
                                        <img src="img/gallery/<?php echo $g2img; ?>" alt="">
                                    <!-- <img src="https://images.unsplash.com/photo-1601412436009-d964bd02edbc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGh1bWFufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt=""> -->
                                    </a>
                                </div>                                  
                            </div>
                            <div class="itemTeam">
                                <div class="team-a">
                                    <a href="gallery.php" target="blank">
                                        <img src="img/gallery/<?php echo $g3img; ?>" alt="">
                                        <!-- <img src="https://images.unsplash.com/photo-1601412436009-d964bd02edbc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGh1bWFufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt=""> -->
                                    </a>
                                </div>                                    
                            </div>
                            <div class="itemTeam">
                                <div class="team-a">
                                    <a href="gallery.php" target="blank">
                                        <img src="img/gallery/<?php echo $g4img; ?>" alt="">
                                        <!-- <img src="https://images.unsplash.com/photo-1601412436009-d964bd02edbc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGh1bWFufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt=""> -->
                                    </a>
                                </div>                                   
                            </div>
                            <div class="itemTeam">
                                <div class="team-a">
                                    <a href="gallery.php" target="blank">
                                        <img src="img/gallery/<?php echo $g5img; ?>" alt="">
                                        <!-- <img src="https://cdn.pixabay.com/photo/2018/01/15/09/17/woman-3083516__340.jpg" alt=""> -->
                                        <!-- <img src="https://images.unsplash.com/photo-1601412436009-d964bd02edbc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGh1bWFufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt=""> -->
                                    </a>
                                </div>                                    
                            </div>
                            <div class="itemTeam">
                                <div class="team-a">
                                    <a href="gallery.php" target="blank">
                                        <img src="img/gallery/<?php echo $g6img; ?>" alt="">
                                        <!-- <img src="https://images.unsplash.com/photo-1601412436009-d964bd02edbc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGh1bWFufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt=""> -->
                                    </a>
                                </div>   
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- js -->
    <script src="JS/team.js"></script>
</body>
</html>