<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/layouts/header.php"); ?>

<div class="row">
  <div class="small-12 medium-4 large-4 columns">
    <h2>Packages Admin</h2>

    <a href="admin.php"><i class="fa fa-chevron-circle-left fa-2x" aria-hidden="true"></i><p>Go back</p></a>
  </div>
  <div class="small-12 medium-8 large-8 columns">
    <form class="admin-form" enctype="multipart/form-data" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">

      <input type="file" name="imageUploaded"><br>
      <input class="inp" type="text" name="title" id="title" placeholder="Type title">
      <input class="inp" type="text" name="subtitle" id="subtitle" placeholder="Type subtitle">

      <textarea class="t-area" type="text" name="description" id="description" placeholder="Type description"></textarea><br>
      <input class="inp" type="number" name="price" placeholder="Price">
      <input class="btn" type="submit" name="submit" value="Upload">

    </form>
  </div>
</div>

  <?php


    if(isset($_POST['submit'])) {
      $targetDirectory = "img/";
      $targetFile = $targetDirectory . basename($_FILES['imageUploaded']['name']);
      $uploadOk = true;
      $title =  mysqli_real_escape_string($connection, $_POST['title']);
      $subtitle =  mysqli_real_escape_string($connection, $_POST['subtitle']);
      $alt= mysqli_real_escape_string($connection, $_POST['description']);
      $price = intval($_POST["price"]);

      $imageName = mysqli_real_escape_string($connection, $targetFile);

      $check = getimagesize($_FILES['imageUploaded']['tmp_name']);

        if($check === false) {
          echo "<p>Not an image!</p>";
          $uploadOk = false;
        }

        if ($_FILES["imageUploaded"]["size"] > 1000000) {
            echo "<p>Your image is too large. Must be less than 1MB</p>";
            $uploadOk = false;
        }

        if($uploadOk === false) {
          echo "<p>Image failed tests.</p>";
        }
        else {
          if(move_uploaded_file($_FILES['imageUploaded']['tmp_name'], $targetFile)) {
            echo "<p>The File ". basename($_FILES['imageUploaded']['name']) . " has been uploaded.</p>";

            $insert = "INSERT INTO package_tb (image, title, subtitle, description, price) VALUES ('" . $imageName . "', '".$title."' , '".$subtitle."' , '".$alt."', ". $price .")";
            $resultInsert = mysqli_query($connection, $insert);
          }
          else {
            echo "<p>The File did not upload successfully</p>";
          }

       }
    }
  ?>

<div class="row-expand">
  <div class="pack-form">
    <?php
      $query = "SELECT * FROM package_tb";
      $result = mysqli_query($connection, $query);
      confirm_query($result);
      $numberOfRows = mysqli_num_rows($result);

      if($numberOfRows > 0) {
        echo "<table>";
        echo "<th>Image</th><th>Title</th><th>Subtitle</th><th>Description</th><th>Price</th><th>Delete</th>";
        while($row = mysqli_fetch_assoc($result)) {
          $id = $row["id"];
          $imageSrc = $row["image"];
          $packageTitle = $row["title"];
          $packageSub = $row["subtitle"];
          $packageDesc = $row["description"];
          $packagePrice = $row["price"];

          echo "<tr>";
          echo "<td><img src='" . $imageSrc . "'</td>";
          echo "<td><h4>".$packageTitle."<h4></td>";
          echo "<td><h4>". $packageSub ."</h4></td>";
          echo "<td>". $packageDesc ."</td>";
          echo "<td><h4>$".$packagePrice."</h4></td>";
          echo "<td><a href='packages_admin.php?delete=". $id ."'/>Delete</a></td>";
          echo "<tr>";

        }
        echo "</table>";
      }

      if(isset($_GET["delete"])) {

					$delete = "DELETE FROM package_tb WHERE id = '".$_GET["delete"]."'";
					$deleteResult = mysqli_query($connection, $delete);
          confirm_query($deleteResult);
				}

    ?>
  </div>
</div>
<div class="">
  <div class="row">

  </div>



<?php require_once("includes/layouts/footer.php"); ?>
</body>
</htmml>
