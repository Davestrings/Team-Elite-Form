<?php

$user = file_get_contents('users.json');
$json = json_decode($user,true);

$emails = array();

if(isset($_POST['submit'])){
    $email = strtolower($_POST['email']);
    $pass = $_POST['password'];

    for($check = 0 ; $check < count($json) ; $check++){

        array_push($emails, $json[$check]['email']);
        
    }

    if(in_array($email,$emails)){
        echo '<strong>sorry, registration failed. Username already taken </strong>';
    }else{
        $new_user = array('email' => $email , 'password' => $pass);
        $json[] = $new_user;
        echo '<strong>Congratulations, registration was successfull</strong> you can now <a href="login.php">login';
    }
    
    $newJson = json_encode($json);
    // echo $newJson;
    file_put_contents('users.json',$newJson);


}
?>