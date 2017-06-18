<?php include "partials/header.php"; ?>

<!--sidebar-->
<div class="small-12 medium-12 large-12 columns">
  <div class="sidebar">
    <div class="row-expand">
      <div class="small-12 medium-12 large-2 columns">
          <div class="sidebar-contact side-pattern">
            <div class="title">
              <h1>Contact</h1>

            </div>
          </div>
          <div class="heading-para">
              <h2>Directions</h2>
              <p>Take the first one left, walk for 5 blocks,at the traffic light turn right.</p>
          </div>
          <div class="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5205.41030890326!2d-123.11363440620966!3d49.281983896817735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa8d10bdb2ca1c083!2sVancouver+Institute+of+Media+Arts+(VanArts)!5e0!3m2!1sen!2sca!4v1477437491122" allowfullscreen></iframe>
          </div>
      </div>
      <div class="page-wrapper">
      <div class="small-12 medium-12 large-10 columns">
        <!--contact form-->
        <form class="contact-form" action="" method="post">
          <!--  General -->
          <div class="form-group">
            <h2 class="heading">Booking & Contact</h2>
            <div class="controls">
              <input type="text" id="name" class="floatLabel" name="name">
              <label for="name">Name</label>
            </div>
            <div class="controls">
              <input type="text" id="email" class="floatLabel" name="email">
              <label for="email">Email</label>
            </div>

          </div>
          <!--  Details -->
          <div class="form-group">
            <h2 class="heading">Details</h2>

              <div class="controls">
                <input type="date" id="arrive" class="floatLabel" name="arrive" value="<?php echo date('Y-m-d'); ?>">
                <label for="arrive" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Arrive</label>
              </div>

              <div class="controls">
                <input type="date" id="depart" class="floatLabel" name="depart" value="<?php echo date('Y-m-d'); ?>" />
                <label for="depart" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Depart</label>
              </div>

            </div>

            <div class="controls">

              <select class="floatLabel">
                <option value="blank"></option>
                <option value="1">1</option>
                <option value="2" selected>2</option>
                <option value="3">3</option>
              </select>
              <label for="fruit">People</label>

            </div>

            <div class="controls">

                <select class="floatLabel">
                  <option value="romance">Romance</option>
                  <option value="deluxe" selected>Deluxe</option>
                  <option value="standard">Standard</option>
                </select>
                <label for="fruit">Room</label>
            </div>
            <div class="btn">Send</div>


        </form>

      </div>
    </div>
   </div>

  </div>
</div>

<div class="">
    <div class="row">


    </div>
</div>

<?php include "partials/footer.php"; ?>
