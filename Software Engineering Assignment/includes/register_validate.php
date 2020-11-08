<?php

include_once 'db_connect.php';
include_once 'db_config.php';

$error_msg = "";

if (isset($_POST['username'], $_POST['email'], $_POST['p'])) {

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    $usertype = '';

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_msg .= '<span class="error">The email address you entered is not valid</span><br>';
    }

    $password = filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING);
    if (strlen($password) != 128) {
        $error_msg .= '<span class="error">Invalid password configuration.</span><br>';
    }

    //checking if the email has already been registered
    $prep_stmt = "SELECT id FROM table_user WHERE email = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);

    if ($stmt) {
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows >= 1) {
            // A user with this email address already exists
            $error_msg .= '<span class="error">A user with this email already exists.</span><br>';
        }
    } else {
        $error_msg .= '<span class="error">Database error</span><br>';
    }

    //checking if the user_name has already been registered
    $prep_stmt = "SELECT id FROM table_user WHERE user_name = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);

    if ($stmt) {
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows >= 1) {
            // A user with this username already exists
            $error_msg .= '<span class="error">A user with this username already exists.</span><br>';
        }
    } else {
        $error_msg .= '<span class="error">Database error</span><br>';
    }

    if(empty($error_msg)) {
        // random salt
        $random_salt = hash('sha512', uniqid(openssl_random_pseudo_bytes(16), TRUE));

        // salted password
        $password = hash('sha512', $password . $random_salt);

        // Insert the new user
        if ($insert_stmt = $mysqli->prepare("INSERT INTO table_user (user_name, user_type, email, password, salt) VALUES (?, ?, ?, ?, ?)")) {
            $insert_stmt->bind_param('sssss', $username, $usertype, $email, $password, $random_salt);
            
            // Execute the prepared query.
            if (! $insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
                exit();
            }
        }
        
        header('Location: ./register_success.php');
        exit();
    }
}