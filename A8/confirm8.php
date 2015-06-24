<!DOCTYPE html>
<!--
Assignment 8
confirm8.php
CIS 425 Summer 2015
Vincent Nguyen
-->

<?php
    // Start a PHP Session
    // Set default timezone

    date_default_timezone_set('MST');

    // Connect to mySQL
    include('connect/serverconnect.php');
    // include('connect/localconnect.php');

    // Get the user-entered data from our HTML index (registration page)

    $name       = $_POST['name'];
    $name2      = mysqli_real_escape_string($dbc, $name);
    $password   = $_POST['password'];
    $username   = $_POST['username'];
    $email      = $_POST['email'];
    $probation  = @$_POST['probation'];
    $hotornot   = $_POST['hotornot'];
    $smartornot = $_POST['smartornot'];
    $beers      = $_POST['beers'];
    $comments   = mysqli_real_escape_string($dbc, $_POST['comments']);

    // Build SQL statement to populate the table
    $query =
    'insert into hw8(name, username, password, email, probation, comments)'
    .
    'values("$name2", "$username", "$password", "$email", "$probation", "$comments")';

    // Run the query
    $result = mysqli_query($dbc, $query) or die ('Unable to write to database!');

    // Close the database connection
    mysqli_close($dbc);
?>
<!-- End of PHP Session -->

<html lang="en">

  <head>
    <!-- Meta tag -->
    <meta name="robots" content="noindex, nofollow" />
    <meta charset="utf-8" />
    <meta http-equiv="refresh" content="5;url=A8/login.php" />

    <!-- Link tag for CSS -->
    <link type="text/css" rel="stylesheet" href="../stylesheets/css3.css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon" />

    <!-- JavaScript tags -->
    <!--<script type="text/javascript" src="../jscode/a3Focus.js"></script>
    <script type="text/javascript" src="../jscode/a3Validate.js"></script>-->
    <script type="text/javascript" src="../jscode/messages.js"> </script>

    <!-- Web Page Title -->
    <title>Vincent Nguyen Confirmation Page</title>

  </head>

  <body>
    <div id="header">
      <p class="sh1">Vincent Nguyen</p>
      <p class="sh2">A7:Login</p>
    </div>

    <div id="navigation">
      <p class="sh2">Site Navigation</p>
      <p><a href="../A1/index.htm">Landing Page</a></p>
      <p><a href="index.htm">A2</a></p>
      <p><a href="../A3/index.htm">A3</a></p>
      <p><a href="../A4/index.htm">A4</a></p>
      <p><a href="../A5/index.htm">A5</a></p>
      <p><a href="../A6/index.htm">A6</a></p>
      <p><a href="../A7index.htm">A7</a></p>
      <p><a href="../A8/login.php">A8</a></p>
      <p><a href="../Project/index.html">Project</a></p>


    </div>

    <div id="external">
      <p class="sh2">External Links</p>
      <a href="http://www.linkedin.com" target="_blank"><img src="../images/linkedInIcon.png" alt="LinkedIn"/></a>
      <a href="https://www.twitter.com" target="_blank"><img src="../images/twitterIcon.jpeg" alt="Twitter Website"/></a>
      <a href="https://www.facebook.com" target="_blank"><img src="../images/facebookIcon.png" alt ="Facebook Website"/></a>
    </div>

    <div id="main">
        <p>Thank you for registering!</p>
        <p>Your information has been added to our database!</p>
        <p>You may click the "Login Now!" link below, or this page will automatically re-direct you to the Login page in 5 seconds...</p>
        <p><a href="login.php">Login Now!</a></p>
    </div>

    <div id="joinform">
        <form id="jform" action="process.php" method="post">
            <p class="fh1">Login Form:</p>

                <?php
                    //Check return code from process.php
                    if (isset($_GET["rc"])) {
                        # code...
                        if ($_GET["rc"] == 1) {
                            # code...
                            echo "<p class='login error'>Invalid Username!</p>";
                        }
                        if ($_GET["rc"] == 2) {
                            # code...
                            echo "<p class='loginerror'>Invalid Password!</p>";
                        }
                        if ($_GET["rc"] == 3) {
                            # code...
                            echo "<p class='loginerror'>Returns from process.php...</p>";
                        }
                    }

                ?>
                <!-- username -->
                <label for="username">Username</label>
                <input type="text" id="username" name="username"
                required autofocus
                placeholder="Enter Username"
                pattern="[a-zA-Z0-9- !$]{4,15}"
                title="Username: 4-15 chars, u/"
                onfocus="messages(this.id)"
                <br />

                <!-- password -->
                <label for="password">Password</label>
                <input type="password" id="password" name="password"
                required
                placeholder="Enter Password"
                pattern="[a-zA-Z0-9- !$]{5,15}"
                title=""
                onfocus="messages(this.id)"
                <br />

                <p class="submit">
                    <input type="submit" value="Login" />
                    <span class="reset">
                        <input type="reset" value="Clear Form!" onclick="history.go(0)" />
                    </span>
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
