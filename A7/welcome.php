<!DOCTYPE html>
<!--
Assignment 7
welcome.php
CIS 425 Summer 2015
Vincent Nguyen
-->

<?php
    //Start a PHP Session
    session_name("customer");
    session_start("customer");

    // Check to see if customer is not logged in
    if (isset($_SESSION['customer']))
    {
        header('Location: welcome.php');
        exit;
    }

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
    <title>Vincent Nguyen Welcome Page</title>

  </head>

  <body>
    <div id="header">
      <p class="sh1">Vincent Nguyen</p>
      <p class="sh2">A7: Welcome Page</p>
    </div>

    <div id="navigation">
      <p class="sh2">Site Navigation</p>
      <p><a href="../A1/index.htm">Landing Page</a></p>
      <p><a href="index.htm">A2</a></p>
      <p><a href="../A3/index.htm">A3</a></p>
      <p><a href="index.htm">A4</a></p>
      <p><a href="index.htm">A5</a></p>
      <p><a href="index.htm">A6</a></p>
      <p><a href="index.htm">A7</a></p>
      <p><a href="index.htm">A8</a></p>
      <p><a href="../Project/index.html">Project</a></p>


    </div>

    <div id="external">
      <p class="sh2">External Links</p>
      <a href="http://www.linkedin.com" target="_blank"><img src="../images/linkedInIcon.png" alt="LinkedIn"/></a>
      <a href="https://www.twitter.com" target="_blank"><img src="../images/twitterIcon.jpeg" alt="Twitter Website"/></a>
      <a href="https://www.facebook.com" target="_blank"><img src="../images/facebookIcon.png" alt ="Facebook Website"/></a>
    </div>

    <div id="main">
        <p>Login successful</p>
    </div>

    <div id="joinform">
        <form id="jform" action="logout.php" method="post">
            <p>
                <?php
                    echo 'Hello! You are logged in as ' . $_SESSION['customer'] . '.';
                    ?>

                <p class="submit">
                    <input type="submit" value="Logout!" />
                </p>

                </form>
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
