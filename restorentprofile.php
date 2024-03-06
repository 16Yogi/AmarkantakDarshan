<?php
  // include("asset/connection.php");
  // include("asset/select.php");
  
  // echo $id;
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("asset/head.php");
    ?>
</head>
<body>
    <?php
       include("headder.php");
       $id=$_GET['id'];
       include("asset/connection.php");
         // $sql = "SELECT * FROM hotel WHERE hotelname='OYO'";
         $sql = "SELECT * FROM hotel WHERE hotelname=$id";

         $result = mysqli_query($con, $sql);

        // if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {


    ?>
    <!-- banner -->
    <div class="container-fluid p-0" id="bsm-container-fluid" style="background-image:url('https://images.pexels.com/photos/775219/pexels-photo-775219.jpeg?auto=compress&cs=tinysrgb&w=600');">
        <div class="container-fluid p-0" id="bgclr">
            <div class="container" id="bsm-container">
                <h3>Restorent Profile</h3>
                <p><a href="index.php">Home</a> / <a href="aboutMain.php">About</a> / <a href="gallery.php">Gallery</a></p>
            </div>
        </div>
    </div>
    <!-- banner end -->
    
    <div class="container-fluid p-0" id="fooditem-container-fluid">
        <div class="container p-0" id="fooditem-container">
            <!-- <h3> Hey! <span>This is Savodaya Restaurants</span><i class="fa-solid fa-face-smile"></i></h3> -->
            <h3> Hey! <span>This is <?php echo $row['hotelname']; ?> Restaurants</span><i class="fa-solid fa-face-smile"></i></h3>

            <div class="row fooditem-row" id="fooditem-row">
                <div class="fooditem-col" id="fooditem-col">
                    <img src="https://images.pexels.com/photos/735869/pexels-photo-735869.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                </div>
                <div class="fooditem-col" id="fooditem-col">
                    <!-- <h4>Savodaya Restaurants</h4> -->
                    <h4><?php echo $row['hotelname']; ?> Restaurants</h4>
                    <p><?php echo $row['abouthotel']; ?></p>
                    <!-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis similique totam molestias libero repellat temporibus beatae, error ullam? Debitis quam tempora, impedit mollitia labore voluptas cum officia minima rem fugit.</p> -->
                    <!-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis similique totam molestias libero repellat temporibus beatae, error ullam? Debitis quam tempora, impedit mollitia labore voluptas cum officia minima rem fugit.</p> -->
                    <!-- <h5>Owner Name - Lorem, ipsum.</h5> -->
                    <h5>Owner Name - <?php echo $row['owner']; ?></h5>

                    <!-- <h5>Contact Number - 7896541230</h5> -->
                    <h5>Contact Number - <?php echo $row['contact']; ?></h5>

                    <!-- <h5>Address - Lorem, ipsum dolor.</h5> -->
                    <h5>Address - <?php echo $row['address']; ?></h5>

                </div>
            </div>
            <div class="mainTeam">
                <div class="childTeam">
                    <div class="wrapTeam">
                        <div class="teamSlider responsive">
                            <div class="itemTeam">
                                <div class="team-a">
                                    <a href="gallery.php" target="blank">
                                        <!-- <img src="https://images.unsplash.com/photo-1601412436009-d964bd02edbc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGh1bWFufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt=""> -->
                                        <img src="img/hotel/<?php echo $row['hp1']; ?>" alt="">
                                    </a>
                                </div>    
                            </div>
                            <div class="itemTeam">
                                <div class="team-a">
                                    <a href="gallery.php" target="blank">
                                        <img src="img/hotel/<?php echo $row['hp2']; ?>" alt="">
                                        <!-- <img src="https://cdn.pixabay.com/photo/2016/11/18/19/07/happy-1836445__340.jpg" alt=""> -->
                                    <!-- <img src="https://images.unsplash.com/photo-1601412436009-d964bd02edbc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGh1bWFufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt=""> -->
                                    </a>
                                </div>                                  
                            </div>
                            <div class="itemTeam">
                                <div class="team-a">
                                    <a href="gallery.php" target="blank">
                                      <img src="img/hotel/<?php echo $row['hp3']; ?>" alt="">
                                        <!-- <img src="https://cdn.pixabay.com/photo/2016/11/29/06/46/adult-1867889__340.jpg" alt=""> -->
                                        <!-- <img src="https://images.unsplash.com/photo-1601412436009-d964bd02edbc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGh1bWFufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt=""> -->
                                    </a>
                                </div>                                    
                            </div>
                            <div class="itemTeam">
                                <div class="team-a">
                                    <a href="gallery.php" target="blank">
                                    <img src="img/hotel/<?php echo $row['hp4']; ?>" alt="">
                                        <!-- <img src="https://cdn.pixabay.com/photo/2016/01/31/15/45/kaputze-1171625__340.jpg" alt=""> -->
                                        <!-- <img src="https://images.unsplash.com/photo-1601412436009-d964bd02edbc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGh1bWFufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt=""> -->
                                    </a>
                                </div>                                   
                            </div>
                            <div class="itemTeam">
                                <div class="team-a">
                                    <a href="gallery.php" target="blank">
                                    <img src="img/hotel/<?php echo $row['hp1']; ?>" alt="">
                                        <!-- <img src="https://media.istockphoto.com/id/1287459398/photo/smiling-female-architect-sitting-at-her-office-desk.jpg?s=612x612&w=0&k=20&c=amDBRQsJDdtauF4ww3OiNFfHFpC5KHLLw5rhr9OrQ6c=" alt=""> -->
                                        <!-- <img src="https://cdn.pixabay.com/photo/2018/01/15/09/17/woman-3083516__340.jpg" alt=""> -->
                                        <!-- <img src="https://images.unsplash.com/photo-1601412436009-d964bd02edbc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGh1bWFufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt=""> -->
                                    </a>
                                </div>                                    
                            </div>
                            <div class="itemTeam">
                                <div class="team-a">
                                    <a href="gallery.php" target="blank">
                                        <img src="https://media.istockphoto.com/id/1307615661/photo/smiling-indian-business-man-working-on-laptop-at-home-office-young-indian-student-or-remote.jpg?s=612x612&w=0&k=20&c=5Urz6DUqrMmg595KZVDXp86GvbRf5U8A55JG4ML4TG0=" alt="">
                                        <!-- <img src="https://images.unsplash.com/photo-1601412436009-d964bd02edbc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGh1bWFufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt=""> -->
                                    </a>
                                </div>   
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
            <?php 
             }
// } else {
//   echo "0 results";
// }

            ?>
      
           <!-- imges -->
           <!-- <div class="row-img">
                <img src="https://images.pexels.com/photos/1484516/pexels-photo-1484516.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                <img src="https://images.pexels.com/photos/1484516/pexels-photo-1484516.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                <img src="https://images.pexels.com/photos/1484516/pexels-photo-1484516.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                <img src="https://images.pexels.com/photos/1484516/pexels-photo-1484516.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
            </div> -->
            <!-- FOOD ITEM -->
            <div class="jumbotron" id="jumbo-menu">
                <h4 class="text-center py-4">Sarvodaya Restorent Menu</h4>
                <table class="table" id="menu-table">
                      <thead class="bg-info">
                        <tr>
                          <th scope="col">List No.</th>
                          <th scope="col">Food Item</th>
                          <th scope="col">Price</th>
                          <th scope="col">Quantity</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Tea</td>
                          <td>Rs- 10/-</td>
                          <td>1 Cup</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Coffee</td>
                          <td>Rs- 30/-</td>
                          <td>1 Cup</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Lassi</td>
                          <td>Rs- 40/-</td>
                          <td>1 Glass</td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>Milk</td>
                          <td>Rs- 40/-</td>
                          <td>1 Glass</td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>Butter Milk</td>
                          <td>Rs- 40/-</td>
                          <td>1 Cup</td>
                        </tr>
                        <tr>
                          <th scope="row">6</th>
                          <td>Mineral Water 1L</td>
                          <td>Rs- 20/-</td>
                          <td>1 Piece</td>
                        </tr>
                        <tr>
                          <th scope="row">7</th>
                          <td>Bread Butter</td>
                          <td>Rs- 40/-</td>
                          <td>2 Piece</td>
                        </tr>
                        <tr>
                          <th scope="row">8</th>
                          <td>Plain Paratha</td>
                          <td>Rs- 40/-</td>
                          <td>Piece</td>
                        </tr>
                        <tr>
                          <th scope="row">9</th>
                          <td>Aaloo Paratha </td>
                          <td>Rs- 50/-</td>
                          <td>Piece</td>
                        </tr>
                        <tr>
                          <th scope="row">10</th>
                          <td>Gobhi Parath</td>
                          <td>Rs- 70/-</td>
                          <td>Piece</td>
                        </tr>
                        <tr>
                          <th scope="row">11</th>
                          <td>Paneet Paratha </td>
                          <td>Rs- 100/-</td>
                          <td>Piece</td>
                        </tr>
                        <tr>
                          <th scope="row">12</th>
                          <td>Puri Sabji</td>
                          <td>Rs- 80/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">13</th>
                          <td>Poha</td>
                          <td>Rs- 50/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">14</th>
                          <td>Vegetable Pakora</td>
                          <td>Rs- 70/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">15</th>
                          <td>Paneer Pakora</td>
                          <td>Rs- 100/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">16</th>
                          <td>Finger Chips</td>
                          <td>Rs- 80/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">17</th>
                          <td>Chana Roasted</td>
                          <td>Rs- 100/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">18</th>
                          <td>Maggi Plain</td>
                          <td>Rs- 50/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">19</th>
                          <td>Vegitable Maggi</td>
                          <td>Rs- 70/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">20</th>
                          <td>Chowmin</td>
                          <td>Rs- 90/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">21</th>
                          <td>Papad Dry</td>
                          <td>Rs- 10/-</td>
                          <td>Piece</td>
                        </tr>
                        <tr>
                          <th scope="row">22</th>
                          <td>Papad Fry</td>
                          <td>Rs- 20/-</td>
                          <td>Piece</td>
                        </tr>
                        <tr>
                          <th scope="row">23</th>
                          <td>Masala Papad</td>
                          <td>Rs- 50/-</td>
                          <td>Piece</td>
                        </tr>
                        <tr>
                          <th scope="row">24</th>
                          <td>Onion Salad</td>
                          <td>Rs- 40/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">25</th>
                          <td>Green Salad</td>
                          <td>Rs- 60/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">26</th>
                          <td>Vegetable Raita</td>
                          <td>Rs- 70/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">27</th>
                          <td>Tawa Roti-Plain</td>
                          <td>Rs- 10/-</td>
                          <td>Piece</td>
                        </tr>
                        <tr>
                          <th scope="row">28</th>
                          <td>Tawa Roti-Butter</td>
                          <td>Rs- 20/-</td>
                          <td>Piece</td>
                        </tr>
                        <tr>
                          <th scope="row">29</th>
                          <td>Rice-Plain</td>
                          <td>Rs- 60/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">30</th>
                          <td>Rice-Jeera</td>
                          <td>Rs- 80/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">31</th>
                          <td>Rice-Fry</td>
                          <td>Rs- 100/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">32</th>
                          <td>Daal-Fry</td>
                          <td>Rs- 80/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">33</th>
                          <td>Daal-Butter Fry</td>
                          <td>Rs- 100/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">34</th>
                          <td>Daal-Tadka</td>
                          <td>Rs- 100/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">35</th>
                          <td>Kadhi</td>
                          <td>Rs- 80/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">36</th>
                          <td>Khichdi</td>
                          <td>Rs- 80/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">37</th>
                          <td>Seasonal Veg.</td>
                          <td>Rs- 100/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">38</th>
                          <td>Mix Veg</td>
                          <td>Rs- 100/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">39</th>
                          <td>Chhole Masala</td>
                          <td>Rs- 100/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">40</th>
                          <td>Aaloo Dum</td>
                          <td>Rs- 100/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">41</th>
                          <td>Aaloo Bhaja</td>
                          <td>Rs- 70/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">42</th>
                          <td>Aaloo Posto</td>
                          <td>Rs- 100/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">43</th>
                          <td>Baigan Bhaja</td>
                          <td>Rs- 70/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">44</th>
                          <td>Aaloo Jeera</td>
                          <td>Rs- 80/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">45</th>
                          <td>Aaloo Tomato</td>
                          <td>Rs- 100/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">46</th>
                          <td>Aaloo Mutter</td>
                          <td>Rs- 100/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">47</th>
                          <td>Paneer Butter Masala</td>
                          <td>Rs- 200/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">48</th>
                          <td>Mutter Paneer</td>
                          <td>Rs- 200/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">49</th>
                          <td>Kadhi Paneer</td>
                          <td>Rs- 200/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">50</th>
                          <td>Chilly Paneer</td>
                          <td>Rs- 220/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">51</th>
                          <td>Paneer Bhurji</td>
                          <td>Rs- 250/-</td>
                          <td>Plate</td>
                        </tr>
                        <tr>
                          <th scope="row">52</th>
                          <td>Sweet(Rasgulla)</td>
                          <td>Rs- 20/-</td>
                          <td>Piece</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!-- information information -->
            <div class="col text-center">
                <h3>Contact us</h3>
                <hr>
                <p><strong>Sarvodaya Restorent</strong></p>
                <p>Owner- Lorem, ipsum.</p>
                <p>7896541230</p>
            </div>
        </div>
    </div>
    <?php
       include("map.php");
    ?>
    <?php
       include("impLinks.php");
       include("footer.php");
    ?>
    <script src="JS/team.js"></script>
    
</body>
</html>

