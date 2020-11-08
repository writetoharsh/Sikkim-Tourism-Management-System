<?php

include_once 'db_config.php';

function sec_session_start() {
    $session_name = 'sec_session_id';   //  custom session name
    $secure = SECURE;

    // stops JavaScript being able to access the session id.
    $httponly = true;

    // Forces sessions to only use cookies.
    if (ini_set('session.use_only_cookies', 1) === FALSE) {
        header("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
        exit();
    }

    // Gets current cookies params.
    $cookieParams = session_get_cookie_params();
    session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly);

    // Sets the session name to the one set above.
    session_name($session_name);

    session_start();            // Start the PHP session
    session_regenerate_id();    // regenerated the session, delete the old one.
}

function login($usrname, $password, $mysqli) {

    if ($stmt = $mysqli->prepare("SELECT id, user_name, user_type, email, password, salt FROM table_user WHERE user_name = ? LIMIT 1"))
     {
         $stmt->bind_param('s', $usrname);  // Bind "$usrname" to parameter.
         $stmt->execute();    // Execute the prepared query.
         $stmt->store_result();
 
         // get variables from result.
         $stmt->bind_result($user_id, $username, $usr_type, $usr_mail, $db_password, $salt);
         $stmt->fetch();
 
         // hash the password with the unique salt.
         $password = hash('sha512', $password . $salt);
         if ($stmt->num_rows == 1) {

                 // Check if the password in the database matches
                 // the password the user submitted.
                 if ($db_password == $password) {
                     // Password is correct!
                     $user_browser = $_SERVER['HTTP_USER_AGENT'];
 
                     $user_id = preg_replace("/[^0-9]+/", "", $user_id);
                     $_SESSION['user_id'] = $user_id;
 
                     $username = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $username);
                     $_SESSION['username'] = $username;

                     $username = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $username);
                     $_SESSION['usr_type'] = $usr_type;
 
                     $_SESSION['login_string'] = hash('sha512', $password . $user_browser);
 
                     // Login successful.
                     return true;
                 } else {
                     // Password is not correct

                    header("Location: ../error.php?err=Database error: login_attempts");
                    exit();
                    
                    return false;
                 }
         } else {
             // No user exists.
             return false;
         }
     } else {
         // Could not create a prepared statement
         header("Location: ../error.php?err=Database error: cannot prepare statement");
         exit();
     }
}

function login_check($mysqli) {
    // Check if all session variables are set
    if (isset($_SESSION['user_id'], $_SESSION['username'], $_SESSION['login_string'])) {
        $user_id = $_SESSION['user_id'];
        $login_string = $_SESSION['login_string'];
        $username = $_SESSION['username'];

        // Get the user-agent string of the user.
        $user_browser = $_SERVER['HTTP_USER_AGENT'];

        if ($stmt = $mysqli->prepare("SELECT password
                      FROM table_user
                      WHERE id = ? LIMIT 1")) {
            // Bind "$user_id" to parameter.
            $stmt->bind_param('i', $user_id);
            $stmt->execute();   // Execute the prepared query.
            $stmt->store_result();

            if ($stmt->num_rows == 1) {
                // If the user exists get variables from result.
                $stmt->bind_result($password);
                $stmt->fetch();
                $login_check = hash('sha512', $password . $user_browser);

                if ($login_check == $login_string) {
                    // Logged In!!!!
                    return true;
                } else {
                    // Not logged in
                    return false;
                }
            } else {
                // Not logged in
                return false;
            }
        } else {
            // Could not prepare statement
            header("Location: ../error.php?err=Database error: cannot prepare statement");
            exit();
        }
    } else {
        // Not logged in
        return false;
    }
}

function getRegistration($mysqli, $regflag){
    
}

function getDPic($mysqli, $unqid){
    
}