<?php
//   include("asset/connection.php");
//   include("asset/insert.php");
//   include("asset/update.php");
//   include("asset/select.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
       include("asset/head.php");
    ?>
</head>
<body>
    <div class="container-fluid p-0" id="event-container-fluid" style="background-image:url('img/event/<?php echo $e3img; ?>')">
        <div class="container p-0" id="event-container">
            <div class="main-container">
                <div class="child-container">
                    <div class="event-wrap">
                        <div class="containt">
                            <h3><?php echo $e1img ; ?></h3>
                            <p><?php echo $e2img; ?></p>
                            <button>Subscribe Event</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>