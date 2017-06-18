<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/layouts/header.php"); ?>
    <div class="row">
      <div class="small-12 medium-4 large-4 columns">
        <h2>Gallery Admin</h2>

        <a href="admin.php"><i class="fa fa-chevron-circle-left fa-2x" aria-hidden="true"></i><p>Go back</p></a>
      </div>
      <div class="small-12 medium-8 large-8 columns">

      <form class="admin-form" enctype="multipart/form-data" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">

        <input type="file" name="imageUploaded"><br>

        <textarea class="t-area" type="text" name="desc" id="desc" placeholder="Text"></textarea><br>
    		<input class="btn" type="submit" name="submit" value="Upload">

    	</form>
    </div>

    	<?php


    		if(isset($_POST['submit'])) {
    			$targetDirectory = "img/";
    			$targetFile = $targetDirectory . basename($_FILES['imageUploaded']['name']);
    			$uploadOk = true;
          $alt= mysqli_real_escape_string($connection, $_POST['desc']);


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

    						$insert = "INSERT INTO gallery_tb (image, alt) VALUES ('" . $imageName . "', '".$alt."')";
    						$resultInsert = mysqli_query($connection, $insert);
    					}
    					else {
    						echo "<p>The File did not upload successfully</p>";
    					}

    			 }
    		}

    		$query = "SELECT * FROM gallery_tb";
    		$result = mysqli_query($connection, $query);
        confirm_query($result);
    		$numberOfRows = mysqli_num_rows($result);

    		if($numberOfRows > 0) {
    			echo "<br>";
    			while($row = mysqli_fetch_assoc($result)) {
    				$imageSrc = $row["image"];
            $altRow = $row['alt'];

    				// echo "<img src='" . $imageSrc . "' alt = '".$altRow."'/>";

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
