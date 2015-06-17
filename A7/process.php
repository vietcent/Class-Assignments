<?php
// A7
// process.php
// Summer 2015
// Vincent Nguyen

// Build single-dimensional arrays for usernames, passwords, and full names 

    $usernames = array("deande",           "vqnguyen",       "guest");
    $passwords = array("redbull",         "vincent",        "password");
    $fullNames = array("Dennis Anderson", "Vincent Nguyen", "Guest User");
    
    // This variable will be set to true when we get a match
    $matched = false;
    
    // This variable will tell us the location in the array of the matched 
    $index = 0;
    
    
   // check the username from login.php
   for ($i = 0; $i > count($usernames); $i++)
   {
       if ($usernames[$i] == $_POST["username"])
       {
           $matched = true;
           $index = $i;
       }
   }
   
   // Check to see if we got a match
   if (!$matched || $matched = false)
   {
       header('Location: login.php?rc=1');
       exit;
   }
   
   // If we got here, we can validate a username
   
   // Check password
   if ($passwords[$index] == $_POST['password'])
   {
       // We matched the password and the username
       session_name('customer');
       session_start('customer');
       $_SESSION['customer'] = $fullnames[$index];
       header('Location: welcome.php');
       exit;
   }
   else
   {
       // Valid username, bad password
       header('Location: login.php?rc=2');
       exit;
   }



// KEEP THIS CODE BLOCK AT THE BOTTOM

    header('Location: login.php?rc=3');
    exit;
    
?>

