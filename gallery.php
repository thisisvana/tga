<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include "partials/header.php"; ?>

           <!-- Slide Show -->
           <div class="sidebar">
             <div class="row-expand">
                 <div class="small-12 medium-12 large-2 columns">
                     <div class="sidebar-gallery side-pattern">
                       <div class="title">
                         <h1>Gallery</h1>
                       </div>
                     </div>
                  </div>
                  <div class="small-12 medium-12 large-10 columns">
                    <div class="slider hide-for-small-only">

                       <div class="header sales active">
                         <div class="header-content">
                           <img src="img/hotels.jpg" alt="boutique hotel room"/>
                           <div class="button-next button-antique"><i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i></div>
                           <div class="button-prev button-modern"><i class="fa fa-chevron-circle-left fa-2x" aria-hidden="true"></i></div>
                         </div>
                       </div>
                       <div class="header antique">
                         <div class="header-content">
                           <img src="img/hoteln.jpg" alt="boutique hotel room"/>
                           <div class="button-next button-modern"><i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i></div>
                           <div class="button-prev button-sales"><i class="fa fa-chevron-circle-left fa-2x" aria-hidden="true"></i></div>
                         </div>
                       </div>
                       <div class="header modern">
                         <div class="header-content">
                           <img src="img/hotelm.jpg" alt="boutique hotel room"/>

                           <div class="button-next button-sales"><i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i></div>
                           <div class="button-prev button-antique"><i class="fa fa-chevron-circle-left fa-2x" aria-hidden="true"></i></div>
                         </div>
                       </div>
                       <div class="header sales">
                         <div class="header-content">
                           <img src="img/hotelp.jpg" alt="boutique hotel room"/>
                           <div class="button-next button-antique"><i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i></div>
                           <div class="button-prev button-modern"><i class="fa fa-chevron-circle-left fa-2x" aria-hidden="true"></i></div>
                         </div>
                       </div>
                       <div class="header antique">
                         <div class="header-content">
                           <img src="img/hotelk.jpg" alt="boutique hotel room"/>
                           <div class="button-next button-modern"><i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i></div>
                           <div class="button-prev button-sales"><i class="fa fa-chevron-circle-left fa-2x" aria-hidden="true"></i></div>
                         </div>
                       </div>
                       <div class="header modern">
                         <div class="header-content">
                           <img src="img/hotela.jpg" alt="boutique hotel room"/>

                           <div class="button-next button-sales"><i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i></div>
                           <div class="button-prev button-antique"><i class="fa fa-chevron-circle-left fa-2x" aria-hidden="true"></i></div>
                         </div>
                       </div>
                       <div class="header sales">
                         <div class="header-content">
                           <img src="img/roomb.jpg" alt="boutique hotel room"/>
                           <div class="button-next button-antique"><i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i></div>
                           <div class="button-prev button-modern"><i class="fa fa-chevron-circle-left fa-2x" aria-hidden="true"></i></div>
                         </div>
                       </div>
                       <div class="header antique">
                         <div class="header-content">
                           <img src="img/restauranta.jpg" alt="boutique hotel room"/>
                           <div class="button-next button-modern"><i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i></div>
                           <div class="button-prev button-sales"><i class="fa fa-chevron-circle-left fa-2x" aria-hidden="true"></i></div>
                         </div>
                       </div>
                       <div class="header modern">
                         <div class="header-content">
                           <img src="img/hoteld.jpg" alt="boutique hotel room"/>

                           <div class="button-next button-sales"><i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i></div>
                           <div class="button-prev button-antique"><i class="fa fa-chevron-circle-left fa-2x" aria-hidden="true"></i></div>
                         </div>
                       </div>

                    </div>
                  </div>
                </div>
            </div>
            <div class="row-expand">
                <div class="small-12 medium-5 large-3 columns">

                     <div class="featured-item">

                       <div class="heading-para">
                           <h2>Let us treat you how you deserve</h2>
                           <p>Step into the intimate lobby of <span>The Get Away</span>
                             and discover the glamarous decor of this contemporary
                             four-star hotel nestled near the city center of Barcelona,
                             and discover the glamarous decor of this contemporary
                             four-star hotel nestled near the city center of Barcelona.
                             Check out packages and deals we offer.
                          </p>
                           <a href="packages.php">
                               <div class="btn">Packages</div>
                           </a>
                       </div>
                     </div>
                     <div class="featured-item">

                       <div class="heading-para">
                           <h2>Enjoy every minute in Barcelona</h2>
                           <p>Step into the intimate lobby of <span>The Get Away</span>
                             and discover the glamarous decor of this contemporary
                             four-star hotel nestled near the city center of Barcelona,
                             and discover the glamarous decor of this contemporary
                             four-star hotel nestled near the city center of Barcelona.
                             Check out deals and attractions in the city.
                          </p>
                           <a href="barcelona.php">
                               <div class="btn">Attractions</div>
                           </a>
                       </div>
                     </div>

                </div>

                <div class="small-12 medium-7 large-9 columns">

                    <?php

                         $queryImg = "SELECT * FROM gallery_tb";
                         $resultImg = mysqli_query($connection, $queryImg);
                         confirm_query($resultImg);
                         $rows = mysqli_num_rows($resultImg);

                         if($rows > 0) {
                             while($rowsArr = mysqli_fetch_assoc($resultImg)){
                               $image = $rowsArr["image"];
                               $desc = $rowsArr["alt"];

                               echo "<div class='services-container small-12 medium-3 large-4 columns'>";
                               echo "<div class='img-container'>";
                               echo "<img src='" .$image. "' alt='" . $desc . "'/>";
                               echo "</div>";
                               echo "</div>";
                             }

                         }
                         else {
                           echo "<p>There is no images</p>";
                         }

                  ?>

                </div>
        </div>


        <div class="main-wrapper">
             <div class="row">
               <!-- <div class="services-container">
                 <div class="img-container">
                    <img src="img/hoteld.jpg" alt="boutique hotel room"/>

                 </div>

               </div> -->
             </div>
        </div>
      <?php include "partials/footer.php"; ?>



</body>
</htmml>
