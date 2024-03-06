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
    ?>
    <!-- banner -->
    <div class="container-fluid p-0" id="bsm-container-fluid" style="background-image:url('https://images.pexels.com/photos/775219/pexels-photo-775219.jpeg?auto=compress&cs=tinysrgb&w=600');">
        <div class="container-fluid p-0" id="bgclr">
            <div class="container" id="bsm-container">
                <h3>Menu</h3>
                <p><a href="index.php">Home</a> / <a href="aboutMain.php">About</a> / <a href="gallery.php">Gallery</a></p>
            </div>
        </div>
    </div>
    <!-- banner end -->
    <!-- FOOD ITEM -->
    <div class="container-fluid p-0" id="fooditem-container-fluid">
        <div class="container p-0" id="fooditem-container">
            <h3> Hey! <span>This is Savodaya Restaurants : Menu</span><i class="fa-solid fa-face-smile"></i></h3>
            <div class="jumbotron" id="jumbo-menu">
                <table class="table" id="menu-table">
                    <!-- <h4 class="text-center py-4">Sarvodaya Restorent Menu</h4> -->
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
                          <!-- <td>1 Cup</td> -->
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Coffee</td>
                          <td>Rs- 30/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Lassi</td>
                          <td>Rs- 40/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>Milk</td>
                          <td>Rs- 40/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>Butter Milk</td>
                          <td>Rs- 40/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">6</th>
                          <td>Mineral Water 1L</td>
                          <td>Rs- 20/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">7</th>
                          <td>Bread Butter</td>
                          <td>Rs- 40/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">8</th>
                          <td>Plain Paratha</td>
                          <td>Rs- 40/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">9</th>
                          <td>Aaloo Paratha </td>
                          <td>Rs- 50/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">10</th>
                          <td>Gobhi Parath</td>
                          <td>Rs- 70/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">11</th>
                          <td>Paneet Paratha </td>
                          <td>Rs- 100/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">12</th>
                          <td>Puri Sabji</td>
                          <td>Rs- 80/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">13</th>
                          <td>Poha</td>
                          <td>Rs- 50/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">14</th>
                          <td>Vegetable Pakora</td>
                          <td>Rs- 70/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">15</th>
                          <td>Paneer Pakora</td>
                          <td>Rs- 100/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">16</th>
                          <td>Finger Chips</td>
                          <td>Rs- 80/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">17</th>
                          <td>Chana Roasted</td>
                          <td>Rs- 100/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">18</th>
                          <td>Maggi Plain</td>
                          <td>Rs- 50/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">19</th>
                          <td>Vegitable Maggi</td>
                          <td>Rs- 70/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">20</th>
                          <td>Chowmin</td>
                          <td>Rs- 90/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">21</th>
                          <td>Papad Dry</td>
                          <td>Rs- 10/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">22</th>
                          <td>Papad Fry</td>
                          <td>Rs- 20/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">23</th>
                          <td>Masala Papad</td>
                          <td>Rs- 50/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">24</th>
                          <td>Onion Salad</td>
                          <td>Rs- 40/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">25</th>
                          <td>Green Salad</td>
                          <td>Rs- 60/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">26</th>
                          <td>Vegetable Raita</td>
                          <td>Rs- 70/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">27</th>
                          <td>Tawa Roti-Plain</td>
                          <td>Rs- 10/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">28</th>
                          <td>Tawa Roti-Butter</td>
                          <td>Rs- 20/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">29</th>
                          <td>Rice-Plain</td>
                          <td>Rs- 60/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">30</th>
                          <td>Rice-Jeera</td>
                          <td>Rs- 80/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">31</th>
                          <td>Rice-Fry</td>
                          <td>Rs- 100/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">32</th>
                          <td>Daal-Fry</td>
                          <td>Rs- 80/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">33</th>
                          <td>Daal-Butter Fry</td>
                          <td>Rs- 100/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">34</th>
                          <td>Daal-Tadka</td>
                          <td>Rs- 100/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">35</th>
                          <td>Kadhi</td>
                          <td>Rs- 80/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">36</th>
                          <td>Khichdi</td>
                          <td>Rs- 80/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">37</th>
                          <td>Seasonal Veg.</td>
                          <td>Rs- 100/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">38</th>
                          <td>Mix Veg</td>
                          <td>Rs- 100/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">39</th>
                          <td>Chhole Masala</td>
                          <td>Rs- 100/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">40</th>
                          <td>Aaloo Dum</td>
                          <td>Rs- 100/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">41</th>
                          <td>Aaloo Bhaja</td>
                          <td>Rs- 70/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">42</th>
                          <td>Aaloo Posto</td>
                          <td>Rs- 100/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">43</th>
                          <td>Baigan Bhaja</td>
                          <td>Rs- 70/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">44</th>
                          <td>Aaloo Jeera</td>
                          <td>Rs- 80/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">45</th>
                          <td>Aaloo Tomato</td>
                          <td>Rs- 100/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">46</th>
                          <td>Aaloo Mutter</td>
                          <td>Rs- 100/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">47</th>
                          <td>Paneer Butter Masala</td>
                          <td>Rs- 200/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">48</th>
                          <td>Mutter Paneer</td>
                          <td>Rs- 200/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">49</th>
                          <td>Kadhi Paneer</td>
                          <td>Rs- 200/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">50</th>
                          <td>Chilly Paneer</td>
                          <td>Rs- 220/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">51</th>
                          <td>Paneer Bhurji</td>
                          <td>Rs- 250/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">52</th>
                          <td>Sweet(Rasgulla)</td>
                          <td>Rs- 20/-</td>
                          <td>
                            Half- <input type="text">
                            Full - <input type="text">
                          </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- buy -->
            <div class="col" id="buy-btn">
                <a href="#"><button>Order now</button></a>
            </div>
            <!-- contact -->
            <div class="col py-5">
                <h3>Contact us</h3>
                <hr>
                <div class="col-sm">
                    <p><strong>Mob. Number- </strong>9425331192, 7987171255</p>
                    <p><strong>Ph. Number- </strong>07629-269517</p>
                    <p><strong>Address- </strong>Near Narmada Temple, Amarkantak Dist- Anuppur(MP) - 484886</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0" id="map-container-fluid">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29451.222628061278!2d81.74077020778054!3d22.6760433966525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3987914444a5a36f%3A0x9d7c760ceef51c03!2sAmarkantak%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1677321302779!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <?php
       include("footer.php");
    ?>
</body>
</html>