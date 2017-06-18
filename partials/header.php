<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>VANARTS STUDENT MOCKUP</title>
        <meta name="description" content="This is a student exercise website for the Vancouver Institute of Media Arts (www.vanarts.com)">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <!-- <link rel="apple-touch-icon" href="apple-touch-icon.png"> -->
        <link rel="stylesheet" href="css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Alex+Brush|Arapey|Oranienbaum" rel="stylesheet">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="https://use.fontawesome.com/1845926a10.js"></script>
    </head>

    <body class="bg">
      <header class="page-header">

          <div class="row-expand">
              <div class="small-6 medium-2 large-2 columns">
                <!--modal for booking-->
                <svg display="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="768" height="800" viewBox="0 0 768 800"><defs><g id="icon-close"><path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path></g></defs></svg>

              <div class="demo" aria-hidden="false">

                <button class="modal-show btn">Book</button>
              </div>

              <div class="modal" aria-hidden="true" role="dialog" aria-labelledby="modalTitle" aria-describedBy="modalDescription">
                <div class="modal-overlay modal-hide" tabindex="-1"></div>
                <div class="modal-container modal-hide">
                  <div class="modal-wrapper modal-transition">
                    <!-- <div id="modalDescription" class="modal-description vh">Beginning of dialog window. It begins with a heading 1 called "This is a modal".</div> -->
                    <div class="modal-header">
                      <button class="modal-close modal-hide"><svg class="icon-close icon" viewBox="0 0 32 32"><use xlink:href="#icon-close"></use></svg></button>
                      <h2 id="modalTitle" class="modal-heading">Booking Form</h2>
                    </div>

                    <div class="modal-body">
                      <div class="modal-content">
                        <p>Enter your information and we will contact you as soon as possible</p>
                        <form action="post">
                          <div>
                            <label for="name">Text Input:</label>
                            <input type="text" name="name" id="name" placeholder="Silvana Agolli" />
                          </div>
                          <br>
                          <!-- <fieldset>
                            <legend>Radio Button Choice</legend>
                            <label for="radio-choice-1">Choice 1</label>
                            <input type="radio" name="radio-choice" id="radio-choice-1" value="choice-1" />
                            <label for="radio-choice-2">Choice 2</label>
                            <input type="radio" name="radio-choice" id="radio-choice-2" value="choice-2" />
                          </fieldset> -->

                          <div>
                            <label for="select-choice">Room Choice:</label>
                            <select name="select-choice" id="select-choice">
                              <option value="Choice 1">Standard</option>
                              <option value="Choice 2">Luxuary</option>
                              <option value="Choice 3">Romantica</option>
                            </select>
                          </div><br>
                          <div>
                            <label for="select-choice">People:</label>
                            <select class="select-people" id="select-people">
                              <option value="blank"></option>
                              <option value="1">1</option>
                              <option value="2" selected>2</option>
                              <option value="3">3</option>
                            </select>
                         </div>
                         <br>
                         <div>
                            <label for="textarea">Textarea:</label><br>
                            <textarea class="t-area" name="textarea" id="textarea"></textarea>
                          </div>
                          <br>
                          <!-- <div>
                            <label for="checkbox">Checkbox:</label>
                            <input type="checkbox" name="checkbox" id="checkbox" />
                          </div>
                          <br> -->
                          <div>
                            <button type="submit" class="btn modal-hide">Send</button>
                          </div>
                        </form>
                        <!--modal form ends-->
                      </div>
                    </div>
                  </div>
                </div>

              </div>

            </div>
            <!--logo-->
            <div class="logo">
                <img src="img/logo_5.svg" alt="boutique hotel logo">
            </div>

          </div>


          <!-- Nav -->
          <nav class="navbar small-6 medium-10 large-10 columns">
              <div class="row">

              <div class="mobile-menu hide-for-large"><a href="#" onclick="toggle()"><i class="fa fa-bars" aria-hidden="true"></i></a></div>

              <ul class="main-menu show-for-large">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="rooms.php">Rooms</a></li>
                  <li><a href="gallery.php">Gallery</a></li>
                  <li><a href="packages.php">Packages</a></li>
                  <li><a href="restaurant.php">Restaurant</a></li>
                  <li><a href="spa.php">Wellness</a></li>
                  <li><a href="barcelona.php">Barcelona</a></li>
                  <li><a href="contact.php">Contact</a></li>

              </ul>

          </nav>
        </div>
    </header>
