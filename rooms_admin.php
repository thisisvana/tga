<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/layouts/header.php"); ?>
<div class="row">
  <div class="small-12 medium-4 large-4 columns">
    <h2>Rooms Admin</h2>

    <a href="admin.php"><i class="fa fa-chevron-circle-left fa-2x" aria-hidden="true"></i><p>Go back</p></a>
  </div>
  <div class="small-12 medium-8 large-8 columns">
    <!-- <div class="row">
      <h2>Change room prices</h2> -->
      <form class="admin-form" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
        <div class="controls">

            <select name="room_name" class="floatLabel">
              <option value="standard">Standard</option>
              <option value="deluxe" selected>Deluxe</option>
              <option value="romance">Romance</option>

            </select><br>

            <input type="number" name="price" placeholder="Price">

        </div>
        <input class="btn" type="submit" name="submit" value="Submit">
      </form>
   </div>
    <?php
        if (isset($_POST['submit'])) {
          // Process the form

          $name = $_POST["room_name"];
          $price = intval($_POST["price"]);

          // validations

          if (!empty($price)) {

            // Sending query for Update

            $queryR  = "UPDATE room_tb SET price = " . $price . " WHERE name = '" . $name . "'";

            $resultR = mysqli_query($connection, $queryR);
            confirm_query($resultR);

            if ($resultR) {
              // Success
              echo "<p>Udate successful</p>";
              header("location:admin.php");
            } else {
              // Failure
            echo "<p>Page update failed.</p>";
            }

          }
        }

      ?>
    </div>
    <div class="">
      <div class="row">

      </div>


    <?php require_once("includes/layouts/footer.php"); ?>
  </body>
</htmml>
