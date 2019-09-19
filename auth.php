<?php

// Get content of the JSON file
$user = file_get_contents('users.json');
$json = json_decode($user,true);

// Create arrays to contain usernames and passwords
$usernames = array();
$passwords = array();

//Authenticate a user
if(isset($_POST['submit'])){
    $username = strtolower($_POST['email']);
    $pass = $_POST['password'];
    
    for($check = 0 ; $check <= count($json) - 1 ; $check++){
        
        // Push username to  usernames array and password to passwords array
        array_push($usernames, $json[$check]['email']);
        array_push($passwords, $json[$check]['password']);
    }

    if(in_array($username,$usernames) && in_array($pass,$passwords)){
        if(array_search($pass,$passwords) == array_search($username,$usernames)){
            echo '<strong style="color:"green""> Login Successful </strong>';
        }else{
            echo '<strong> Username and password does not match</strong>';
        }
    }else{
        echo '<strong> User does not exist </strong>';
    }
}
?>