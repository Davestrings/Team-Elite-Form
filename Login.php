<?php include('dbcon.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Get the best learning experience with Team Elite. We offer the best programming lessons. Kickstart your Tech career here.">
    <meta name="keyword" content="Team Elite, Html, Css, Javascript, Vanilla js, Java, PHP, Lavarel, Vue, Vue js, React, React js, Node, Node js, Django, Wordpress,">
    <title>Login |team Elite</title>

    <!--Fonts and icon-->
    <link rel="icon" href="https://res.cloudinary.com/ddu0ww15f/image/upload/v1568675580/icons8-joe-pineapples-16_xhpzbw.png" type="img/x-icon">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&display=swap">
</head>
<body>
    <div class="container">

        <!--LHS-->

        <div class="title">
            <h1>Join Team <span>ELITE</span></h1>
            <div class="text">
                <p>
                    Be part of the growing community of <br> 
                    developers with the aim of using tech <br>
                    to change the world.
                </p>  
            </div>
            <div class="sign-up">
                <a href="Sign Up.php"><input class="sign-up-btn" type="submit" name="sign-up" value="Sign Up"></a>
            </div>
            <div class="alternate">
                <div class="icons">
                    <div class="fb-icon">
                        <a href="https://www.facebook.com" target="_blank"><img src="https://res.cloudinary.com/ddu0ww15f/image/upload/v1568643675/icons8-facebook-50_1_bltqey.png" alt=""></a>
                    </div>
                    <div class="tw-icon">
                        <a href="https://www.twitter.com" target="_blank"><img src="https://res.cloudinary.com/ddu0ww15f/image/upload/v1568643869/icons8-twitter-50_nhjr6m.png" alt=""></a>
                    </div>
                    <div class="whats-icon">
                        <a href="https://www.whatsapp.com" target="_blank"><img src="https://res.cloudinary.com/ddu0ww15f/image/upload/v1568644039/icons8-whatsapp-50_bb3r0f.png" alt=""></a>
                    </div>
                    <div class="insta-icon">
                        <a href="https://www.instagram.com" target="_blank"><img src="https://res.cloudinary.com/ddu0ww15f/image/upload/v1568643779/icons8-instagram-50_1_gafqhd.png" alt=""></a>
                    </div>
                 </div>
                    <h2>
                        Login Using Social Media
                    </h2>
            </div>
        </div>

        <!--RHS-->
            <div class="inner-wrap">
                <div class="form-head">
                    <h2>Login</h2>
                </div> 
                <div class="content">
                    <form action="" class="form-login" method="post">
					
                        <label for="email" class="label">Email :</label><br><br>
                        <input type="email" class="fill" name="email"  placeholder="Type Your Email" required><br><br>
                        <label for="password" class="label">Password:</label><br>
                        <input type="password" class="fill" name="password"  placeholder="Type Your Password" required><br><br>
                        <input type="submit" class="btn" name="submit" value="Login"><br>
				<?php
if (isset($_POST['submit'])){

$username = $_POST['email'];
$password = $_POST['password'];
$user_query = "SELECT * FROM team_elite WHERE user_id ='$username' AND password='$password'";
$user_result = mysqli_query($con, $user_query)or die(mysql_error());
$num_row1 = mysqli_num_rows($user_result);
		$row1 = mysqli_fetch_array($user_result);;
		if( $num_row1 > 0 ) {		
		//session_start();
		
	$_SESSION['id']=$row1['user_id']; ?>
	<script>
	window.location="landing-page.php";
	</script>
	<?php
	}else{ ?>
		<div class="alert alert-danger"><strong>Login Error!</strong>&nbsp;Please check your Username and Password</div>
	<?php	
	}	
		}
?>			
                        <div class="forgot">
                                <p><a href="#">Forgot password?</a></p>
                            </div>
                    </form>
                    
                </div>
                
                <!--
                    <div class="alternate">
                        <p>Or Login using</p>
                        <div class="icons">
                            <a href="https://www.facebook.com" target="_blank"><i class="fas fa-facebook-square fa-2x fa-fw"></i></a>
                            <a href="https://www.twitter.com" target="_blank"><i class="fas fa-twitter-square fa-2x fa-fw"></i></a>
                            <a href="https://www.instagram.com" target="_blank"><i class="fas fa-instagram fa-2x fa-fw"></i></a>
                        </div>
                    </div>
                    <div class="sign-up">
                        <p><a href="#">Sign Up</a></p>
                    </div>
                -->
            </div>
    </div>
            <div class="footer">
                <p>&copy; 2019 | Team Elite</p>
            </div>
</body>
</html>
