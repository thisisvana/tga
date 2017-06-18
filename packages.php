<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include "partials/header.php"; ?>



<div class="sidebar">
  <div class="row-expand">
      <div class="small-12 medium-12 large-2 columns">
          <div class="sidebar-packages side-pattern">
            <div class="title">
              <h1>Packages</h1>
            </div>

          </div>

      </div>

      <div class="small-12 medium-12 large-10 columns">
          <div class="banner hide-for-small-only">
            <img src="img/enhance.jpeg" alt="boutique hotel room"/>
          </div>


      </div>
    </div>
  </div>
  <div class="small-12 medium-12 large-12 columns">
    <div class="heading-para hide-for-small-only">
      <h2 class="bg-heading">AWAKEN YOUR SENSES</h2>

     </div>
  </div>


  <div class="package-div small-12 medium-12 large-12 columns">
    <div class="row-expand">

      <?php

           $queryP = "SELECT * FROM package_tb";
           $resultP = mysqli_query($connection, $queryP);
           confirm_query($resultP);
           $rows = mysqli_num_rows($resultP);

           if($rows > 0) {
               while($rowsArr = mysqli_fetch_assoc($resultP)){
                 $image = $rowsArr["image"];
                 $title = $rowsArr["title"];
                 $subt = $rowsArr["subtitle"];
                 $desc = $rowsArr["description"];
                 $price = $rowsArr["price"];


                 echo "<div class='packages small-12 medium-12 large-4 columns'>";
                 echo "<div class='packages-item'>";
                 echo "<img src='" .$image. "'/>";
                 echo "</div>";
                 echo "<div class='heading-para'>";
                 echo "<h2>".$title."</h2>";
                 echo "<h5>".$subt."</h5>";
                 echo "<p>".$desc."</p>";
                 echo "<h5>$".$price."/7nights</h5>";
                 echo "<a href='contact.php'>";
                 echo "<div class='btn'>Book</div>";
                 echo "</a>";
                 echo "</div>";
                 echo "</div>";
               }

           }
           else {
             echo "<p>There is no data</p>";
           }

    ?>

      </div>
    </div>

<div class="main-wrapper">
    <div class="row">

    </div>
</div>

<?php include "partials/footer.php"; ?>
