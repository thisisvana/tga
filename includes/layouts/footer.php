<footer class="page-footer">
  <div class="overlay">

    <div class="row">
      <div class="footer-box small-centered medium-centered large-centered columns">
        <div class="footer-text">
             <i class="footer-icon fa fa-copyright" aria-hidden="true"></i>
             <p>Silvana Agolli<br>
             VanArts - 2017</p>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php
// Close database connection
if (isset($connection)) {
mysqli_close($connection);
}
?>
