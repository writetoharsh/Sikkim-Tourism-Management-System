<?php

include_once 'db_connect.php';
include_once 'functions.php';

sec_session_start(); // Our custom secure way of starting a PHP session.

if (isset($_POST['username'], $_POST['p'])) {
    $usrname = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = $_POST['p']; // The hashed password.

    if (login($usrname, $password, $mysqli) == true) {
        // Login success
        header("Location: ../index.php");
        exit();
    } else {
        // Login failed
        header('Location: ../login.php?error=1');
        exit();
    }
} else {
    // The correct POST variables were not sent to this page.
    header('Location: ../error.php?err=Could not process login');
    exit();
}