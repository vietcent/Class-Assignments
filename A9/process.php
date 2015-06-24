// A9
// process.php
// Summer 2015
// Vincent Nguyen

<?php
    // connect to the db
    include('../connect/localconnect.php');
    include('../connect/serverconnect.php');

    // get the html values
    $uname = $_POST['username'];
    $pword = $_POST['password'];

    //build the query
    $query = "SELECT * from hw8 where username = '$uname'";

    //run the query
    $result = mysqli_query($dbc, $query) or die('MySQL read error!');

    //check to see if we got a row
    if (mysqli_num_rows($result) == 0) {
        # code...
        header('Location: login.php?rc=1');
        exit;
    }

    // if we get here, we can verify a username. Yay

    // this builds a single dimension array addressable by column name
    $rec = mysqli_fetch_array($result);
    //check password

    if ($rec['password'] != $pword)
    {
        header('Location: login.php?rc=2');
        exit;
    }

    // we can verify a username and password combo

    // close the dbc
    mysqli_close($dbc);

    // name and start our session.
    // we do not need dbc connection for session connection
    session_name("customer");
    session_start("customer");

    // set our session variable, unique to customer
    $_SESSION['customer'] = $rec['name'];
    header('Location: welcome.php')

    // KEEP THIS CODE BLOCK AT THE BOTTOM
    header('Location: login.php?rc=3');
    exit;
?>
