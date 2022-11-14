<?php

session_start();

if (!isset($_SESSION['user'])) {
    header("Location: authentication/");
}

?>

<?php
session_unset();
session_destroy();

header("Location: index.php");

?>