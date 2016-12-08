<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

  <title>Andrew Levandoski</title>

  <link rel="icon" href="images/favicon.ico">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Asul|David+Libre|Fjalla+One|Homemade+Apple" rel="stylesheet">
</head>
<body>
  <div id="header" class="blue-grey darken-4">
    <div class="media-container">
      <a href="https://www.facebook.com/1alevandoski" target="_blank">
        <img class="social" src="images/social-icons/facebook.png" alt="facebook"/>
      </a>
      <a href="https://www.instagram.com/andy11doski/" target="_blank">
        <img class="social" src="images/social-icons/instagram.png" alt="instagram"/>
      </a>
      <a href="https://github.com/andrewlevandoski" target="_blank">
        <img class="social" src="images/social-icons/github.png" alt="github"/>
      </a>
      <a href="https://www.linkedin.com/in/andrew-levandoski-03a381b8" target="_blank">
        <img class="social" src="images/social-icons/linkedin.png" alt="linkedin" style="width: 26px"/>
      </a>
    </div>
    <img id="name-logo" src="images/name-logo.png" alt="Andrew Levandoski" align="middle"/>
  </div>

  <nav id="dynamic-header" class="blue-grey darken-4">
    <img id="dynamic-name-logo" src="images/name-logo.png" alt="Andrew Levandoski" align="middle"/>
    <div id="dynamic-tab-container">
      <a class="dynamic-tab" href="index.php">HOME</a>
      <a class="dynamic-tab" href="projects.php">PROJECTS</a>
      <a class="dynamic-tab" href="artwork.php">ARTWORK</a>
      <a class="dynamic-tab" href="resume.php">RESUME</a>
    </div>
  </nav>

  <div id="tab-container">
    <a class="tab" href="index.php">HOME</a>
    <a class="tab" href="projects.php">PROJECTS</a>
    <a class="tab" href="artwork.php">ARTWORK</a>
    <a class="tab" href="resume.php">RESUME</a>
  </div>

  <div class="title-container">
      <h1 id="contact-title">Contact Form</h1>
  </div>
    <div id="form" class="form-container">
      <form action="mail.php" method="POST">
        <p class="contact-input">Name</p> <input type="text" name="name" placeholder="your name">
        <p class="contact-input">Email</p> <input type="text" name="email" placeholder="your email">
        <p class="contact-input">Message</p><textarea name="message" rows="6" cols="25" placeholder="you talkin' to me?"></textarea><br />
        <input id="send-button" type="submit" value="Send"><input type="reset" value="Clear">
      </form>
    </div>

    <div id="error-message" class="form-container">
      <p id="error-text-1" class="etext">
        Name has been left blank.
      </p>
      <p id="error-text-2" class="etext">
        Email has been left blank.
      </p>
      <p id="error-text-4" class="etext">
        Please enter a valid email address.
      </p>
      <p id="error-text-3" class="etext">
        Message has been left blank.
      </p>
    </div>
    <div id="submit-message" class="form-container">
      <h1 id="submit-text" >Your message has been submitted. I <br> won't be getting back to you (yet). Thanks!</h1>
    </div>

    <footer class="blue-grey darken-2">
      <div class="footer-section-left">
        <h5 class="footer-title">About</h5>
        <p>
          I am a computer science and economics major at the University of Pittsburgh.
        </p>
      </div>

      <div class="footer-section-right">
        <h5 class="footer-title">Contact</h5>
        <p>
          <a class="white-text" href="https://mail.google.com/mail/?fs=1&view=cm&shva=1&su=&to=andrewlevandoski@pitt.edu" target="_blank">andrewlevandoski@pitt.edu</a></li>
        </p>
        <a href="contact.php" style="color: #FFFFFF">Contact Form</a>
      </div>
      <div id="footer-bottom" class="blue-grey darken-4">
        <p>
          Made by Andrew Levandoski
        </p>
      </div>
    </footer>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
