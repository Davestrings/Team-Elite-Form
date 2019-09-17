<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Get the best learning experience with Team Elite. We offer the best programming lessons. Kickstart your Tech career here.">
    <meta name="keyword" content="Team Elite, Html, Css, Javascript, Vanilla js, Java, PHP, Lavarel, Vue, Vue js, React, React js, Node, Node js, Django, Wordpress,">
    <title>Login Form</title>

    <!--Fonts and icon-->
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" href="Fontawesome-all.css">
</head>
<body style="">
    <div class="container">

        <!--LHS-->

        <div class="title">
        <div class="tent">
            <h1>Join the <span>fun.</span></h1>
            <div class="text">
                <p>Welcome to <strong>Team Elite.</strong> We make learning a fun thing.</p>
                <p>We are a team of professional programmers who believe in the value creation.
                    This is why we have put together the best lessons you can get to start your career in tech.
                    Join the ride now. We promise you fun!
                </p>
                <p>You will get the best programming tutorials here.</p>
            </div>
        </div>
            <div>
                <input class="sign-up-btn" type="submit" name="sign-up" value="Sign Up">
            </div>
        </div>

        <!--RHS-->
        
        <div class="form-wrap">
            <div class="inner-wrap">
                <div class="form-head">
                    <h2>Login</h2>
                </div>  
                <form class="content" method="POST" action="Login.php">
                    <label for="email" class="label">Username:</label><br>
                    <input type="email" class="fill" name="email"  placeholder="Type Your Email" required><br>
                    <label for="password" class="label">Password:</label><br>
                    <input type="password" class="fill" name="password"  placeholder="Type Your Password" required><br>
                    <input type="submit" class="btn" name="submit" value ="Login"><br>
					   <?php
                if(isset($_POST['submit'])){
                    $user = $_POST['email'];
                    $password = $_POST['password'];
                    $logindetails = $user . ',' . $password . " ";
                    $fileopen = fopen('crendential.txt', 'a+');
                    $file = file_get_contents('crendential.txt'); 
                   // print $file;
                    $search = $user . ','; 
                   // print $search;
                   // if(strpos($file, $search)) ${ 
                     //       echo 'Email Address Already Exist' . $user;
                       //  }

                       // else 
                        
                            if(fwrite ($fileopen, $logindetails)){
                                //header("Location: Add Location");
                                echo "User Details Valid";</p>
                        }
                            
                        
                    fclose($fileopen);
                }
                ?>
                </form>
             
                <div class="forgot">
                    <p><a href="#">Forgot password?</a></p>
                </div>
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
            </div>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2019 | Team Elite</p>
    </div>
</body>
</html>