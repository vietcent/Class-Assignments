<?php

// A8
// localconnect.php
// Summer2015
// Vincent Nguyen

    //Setup connection variables

    $host = 'localhost';
    $user = 'root';
    $pw = '';
    $db = 'hmwk2154';

    // Connect to mySQL

    $dbc = mysqli_connect($host, $user, $pw, $db) or die('Connect error - Local');


?>
