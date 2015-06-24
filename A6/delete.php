<!DOCTYPE html>
<!--
Assignment 6
delete.php
CIS 425 Summer 2015
Vincent Nguyen
-->

<?php
    //Start a PHP Session
    session_start("cookie");

    //Establish cookie (name, value, expiration of cookie, path, domain)
    $name  = 'oreo';
    $value = '';
    $exp    = time() - 1;
    setcookie($name, $value, $exp);
?>
<!-- End of PHP Session -->

<html lang="en">

  <head>
    <!-- Meta tag -->
    <meta name="robots" content="noindex, nofollow" />
    <meta charset="utf-8" />

    <!-- Link tag for CSS -->
    <link type="text/css" rel="stylesheet" href="../stylesheets/css3.css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon" />

    <!-- JavaScript tags -->
    <!--<script type="text/javascript" src="../jscode/a3Focus.js"></script>
    <script type="text/javascript" src="../jscode/a3Validate.js"></script>-->
    <script type="text/javascript" src="../jscode/messages.js"></script>

    <!-- Web Page Title -->
    <title>Vincent Nguyen A6 PHP Delete</title>

  </head>

  <body>
    <div id="header">
      <p class="sh1">Vincent Nguyen</p>
      <p class="sh2">A6:Delete</p>
    </div>

    <div id="navigation">
      <p class="sh2">Site Navigation</p>
      <p><a href="../index.htm">Landing Page</a></p>
      <p><a href="../A2/index.htm">A2</a></p>
      <p><a href="../A3/index.htm">A3</a></p>
      <p><a href="../A4/index.htm">A4</a></p>
      <p><a href="../A5/index.htm">A5</a></p>
      <p><a href="index.htm">A6</a></p>
      <p><a href="../A7/index.htm">A7</a></p>
      <p><a href="../A8/index.htm">A8</a></p>
      <p><a href="../A9/index.htm">A9</a></p>
      <p><a href="../Project/index.html">Project</a></p>


    </div>

    <div id="external">
      <p class="sh2">External Links</p>
      <a href="http://www.linkedin.com" target="_blank"><img src="../images/linkedInIcon.png" alt="LinkedIn"/></a>
      <a href="https://www.twitter.com" target="_blank"><img src="../images/twitterIcon.jpeg" alt="Twitter Website"/></a>
      <a href="https://www.facebook.com" target="_blank"><img src="../images/facebookIcon.png" alt ="Facebook Website"/></a>
    </div>

    <div id="main">
    <p class="bold">Fun with Cookies</p>
    <p>Click an icon below to <span class="green">Create,</span>, check, or
    <span class="red" Delete</span> your cookie</p>
    </div>

    <div id="icons">

        <!--<div id="icon1">
            <a href="create.php"><img src="../images/cm1.jpg" alt="Create!" /> </a>
        </div>-->

        <div id="icon2">
            <a href="index.htm"><img src="../images/cm4.jpg" alt="Return!" /> </a>
        </div>

        <!-- PHP starts -->
        <?php
            //Display delete message
            echo "All Oreo Cookies have been deleted!";
        ?>
        <!-- PHP ends -->

        <!--<div id="icon3">
            <a href="delete.php"><img src="../images/cm3.jpg" alt="Delete!" /> </a>
        </div>-->

    </div>


    <p id="jsmsgs"></p>


    <div id="footer">
    <p>
        <img src="../images/html5.png" alt="Valid HTML5 Icon" />
        <a href="../email/emform.htm"><img src="../images/em3.png" alt="Contact Us Icon" /></a>
        <img src="../images/css3.png" alt="Valid CSS3 Icon"/>
        <br />

        &copy;2015, Vincent Nguyen

    </p>
    </div>

  </body>

</html>
