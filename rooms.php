
<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

<?php include "partials/header.php"; ?>

          <!--sidebar-->
           <div class="sidebar">
             <div class="row-expand">
                 <div class="small-12 medium-12 large-2 columns">
                     <div class="sidebar-rooms side-pattern">
                       <div class="title">
                         <h1>Rooms</h1>
                       </div>

                     </div>

                 </div>

                 <!--page main banner-->
                 <div class="small-12 medium-12 large-10 columns">
                     <div class="sample-movie hide-for-small-only">
                       <video autoplay="autoplay" loop="loop" class="fillWidth">
                         <source src="img/Chandelier - 1629.mp4" type="video/mp4" />

                       </video>
                       <!-- <img src="img/hotel9.jpg" alt="boutique hotel room"/> -->
                     </div>

                 </div>

             </div>
           </div>
           <div class="featured">
               <div class="row-expand">
                   <div class="feat hide-for-small-only medium-12 large-12 columns">
                       <div class="heading-para">
                           <h2 class="bg-heading">Styled with passion</h2>

                       </div>
                   </div>

               </div>
           </div>


           <!-- Types of Rooms -->

           <div class="rooms">
               <div class="row">
                   <section class="small-12 medium-12 large-12 columns">
                       <div class="room-info small-12 medium-6 large-4 columns">

                         <div class="heading-para">
                             <h2>Standard</h2>
                             <p>Step into the intimate lobby of <span>The Get Away</span>
                               and discover the glamarous decor of this contemporary
                               four-star hotel nestled near the city center of Barcelona.
                             The bold and vivid colours make for a unique atmosphere,
                             perfect for a hideaway in the historic Catalan Quarter.</p>

                            <ul class="room-list">
                               <li>Queen size bed</li>
                               <li>Cable TV</li>
                               <li>Wifi</li>
                               <li>Shower</li>
                               <li>AC</li>
                               <li>Telephone</li>

                            </ul>
                            <div class="room-price">
                              <!--updateable prices-->
                              <h3>$
                                <?php
                                  $query = "SELECT price FROM room_tb WHERE name = 'Standard'";
                                  $result = mysqli_query($connection, $query);
                                  confirm_query($result);
                                  $rows = mysqli_num_rows($result);

                                  if($rows > 0) {
                                      while($rowArr = mysqli_fetch_assoc($result)){
                                        $price = $rowArr["price"];

                                        echo $price;
                                      }

                                  }
                                  else {
                                    echo "<p>There is no data</p>";
                                  }


                                 ?>/night</h3>
                            </div>
                            <a href="contact.php">
                                 <div class="btn">Book</div>
                            </a>
                         </div>
                       </div>

                       <div class="room small-12 medium-6 large-8 columns">
                         <div class="featured-rooms small-12 medium-12 large-6 columns">
                           <img class="room-img" src="img/roomb.jpg" alt="boutique hotel room" /></a>
                           <img class="room-img" src="img/hotela.jpg" alt="boutique hotel room" /></a>

                        </div>
                        <div class="featured-rooms small-12 medium-12 large-6 columns">
                          <img class="room-img" src="img/roomc.jpg" alt="boutique hotel room" /></a>
                          <img class="room-img" src="img/hotelk.jpg" alt="boutique hotel room" /></a>

                       </div>
                       <!-- <div class="featured-item small-12 medium-6 large-12 columns"> -->
                           <!-- <a href="#" class="featured-img"><img src="img/hotel13.jpg" alt="boutique hotel room" /></a>
                           <a href="#" class="featured-img"><img src="img/room4.jpg" alt="boutique hotel room" /></a> -->

                      </div>
                   </section>

               </div>
           </div>

           <!--room type-->
           <div class="rooms">
               <div class="row">
                   <section class="small-12 medium-12 large-12 columns">
                       <div class="room small-12 medium-6 large-8 columns">
                         <div class="featured-rooms small-12 medium-12 large-6 columns">
                           <img class="room-img" src="img/roomc.jpg" alt="boutique hotel room" /></a>
                           <img class="room-img" src="img/hotela.jpg" alt="boutique hotel room" /></a>

                        </div>
                        <div class="featured-rooms small-12 medium-12 large-6 columns">
                          <img class="room-img" src="img/roomb.jpg" alt="boutique hotel room" /></a>
                          <img class="room-img" src="img/hotelm.jpg" alt="boutique hotel room" /></a>

                       </div>
                       <!-- <div class="featured-item small-12 medium-6 large-12 columns"> -->
                           <!-- <a href="#" class="featured-img"><img src="img/hotel13.jpg" alt="boutique hotel room" /></a>
                           <a href="#" class="featured-img"><img src="img/room4.jpg" alt="boutique hotel room" /></a> -->

                      </div>
                       <div class="room-info small-12 medium-6 large-4 columns">

                         <div class="heading-para">
                             <h2>Deluxe</h2>
                             <p>Step into the intimate lobby of <span>The Get Away</span>
                               and discover the glamarous decor of this contemporary
                               four-star hotel nestled near the city center of Barcelona.
                             The bold and vivid colours make for a unique atmosphere,
                             perfect for a hideaway in the historic Catalan Quarter.</p>

                             <ul class="room-list">
                               <li>Queen size bed</li>
                               <li>Cable TV</li>
                               <li>Wifi</li>
                               <li>Shower</li>
                               <li>AC</li>
                               <li>Telephone</li>

                             </ul>
                             <div class="room-price">
                               <!--updateable prices-->
                               <h3>$
                                 <?php
                                   $query1 = "SELECT price FROM room_tb WHERE name = 'Deluxe'";
                                   $result1 = mysqli_query($connection, $query1);
                                   confirm_query($result1);
                                   $rows = mysqli_num_rows($result1);

                                   if($rows > 0) {
                                       while($rowArr = mysqli_fetch_assoc($result1)){
                                         $price = $rowArr["price"];

                                         echo $price;
                                       }

                                   }
                                   else {
                                     echo "<p>There is no data</p>";
                                   }


                                  ?>/night</h3>
                             </div>
                             <a href="contact.php">
                                 <div class="btn">Book</div>
                             </a>
                         </div>
                       </div>
                   </section>


               </div>
           </div>

           <!-- Room type -->

           <div class="rooms">
               <div class="row">
                   <section class="small-12 medium-12 large-12 columns">
                       <div class="room-info small-12 medium-6 large-4 columns">

                         <div class="heading-para">
                             <h2>Romance</h2>
                             <p>Step into the intimate lobby of <span>The Get Away</span>
                               and discover the glamarous decor of this contemporary
                               four-star hotel nestled near the city center of Barcelona.
                             The bold and vivid colours make for a unique atmosphere,
                             perfect for a hideaway in the historic Catalan Quarter.</p>

                             <ul class="room-list">
                               <li>Queen size bed</li>
                               <li>Cable TV</li>
                               <li>Wifi</li>
                               <li>Shower</li>
                               <li>AC</li>
                               <li>Telephone</li>

                             </ul>
                             <div class="room-price">
                               <!--updateable prices-->
                               <h3>$
                                 <?php
                                   $query2 = "SELECT price FROM room_tb WHERE name = 'Romance'";
                                   $result2 = mysqli_query($connection, $query2);
                                   confirm_query($result2);
                                   $rows = mysqli_num_rows($result2);

                                   if($rows > 0) {
                                       while($rowsArr = mysqli_fetch_assoc($result2)){
                                         $price = $rowsArr["price"];

                                         echo $price;
                                       }

                                   }
                                   else {
                                     echo "<p>There is no data</p>";
                                   }


                                  ?>/night</h3>
                             </div>
                             <a href="contact.php">
                                 <div class="btn">Book</div>
                             </a>
                         </div>
                       </div>

                       <div class="room small-12 medium-6 large-8 columns">
                         <div class="featured-rooms small-12 medium-12 large-6 columns">
                           <img class="room-img" src="img/roomb.jpg" alt="boutique hotel room" /></a>
                           <img class="room-img" src="img/hotelm.jpg" alt="boutique hotel room" /></a>

                        </div>
                        <div class="featured-rooms small-12 medium-12 large-6 columns">
                          <img class="room-img" src="img/roomw.jpg" alt="boutique hotel room" /></a>
                          <img class="room-img" src="img/roomc.jpg" alt="boutique hotel room" /></a>

                       </div>
                       <!-- <div class="featured-item small-12 medium-6 large-12 columns"> -->
                           <!-- <a href="#" class="featured-img"><img src="img/hotel13.jpg" alt="boutique hotel room" /></a>
                           <a href="#" class="featured-img"><img src="img/room4.jpg" alt="boutique hotel room" /></a> -->

                      </div>
                   </section>

               </div>
           </div>



           <div class="">
               <div class="row">

               </div>
           </div>

           <?php include "partials/footer.php"; ?>
