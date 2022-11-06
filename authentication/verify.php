<?php
include "../connection.php";



// getting vrification key from url
$vkey =  $_GET['vkey'];
$flag = $_GET['flag'];

// cheking this vkey exist in database or not
$vkey = mysqli_real_escape_string($conn, $vkey);
$query = "SELECT * FROM accounts WHERE vkey = '" . $vkey . "'";
$result =  mysqli_query($conn, $query);


// if this key exist then activate account 
if (mysqli_num_rows($result) == 1) {

    while ($row = mysqli_fetch_assoc($result)) {
        $username = $row['username'];
    }

    // Genrating new vkey to update
    $newVkey = md5(time() . $username);

    // verify key to activate account
    if ($flag == "activate") {

        // update query to activate account
        $query = "UPDATE accounts SET vstatus = 1, vkey= '$newVkey' WHERE vkey = '$vkey' LIMIT 1";
        $update =  mysqli_query($conn, $query);

        // if query fire successfully 
        if ($update) {
            header('Location: index.php?vstate=1');
        } else {
            mysqli_error($conn);
        }
    }

    // verify key to reset password
    else if ($flag == "reset") {
        $query = "UPDATE accounts SET vkey= '$newVkey' WHERE vkey = '$vkey' LIMIT 1";
        $update =  mysqli_query($conn, $query);
        if ($update) {
            session_start();
            $_SESSION['ResetPass'] = $username;
            header('Location: services/resetpass.php');
        } else {
            mysqli_error($conn);
        }
    }
} else {
    echo "something wrong";
}
