<?php include('dbcon.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Get the best learning experience with Team Elite. We offer the best programming lessons. Kickstart your Tech career here.">
    <meta name="keyword" content="Team Elite, Html, Css, Javascript, Vanilla js, Java, PHP, Lavarel, Vue, Vue js, React, React js, Node, Node js, Django, Wordpress,">
    <title>Sign Up | Team Elite</title>

     <!--Fonts and icon-->
     <link rel="icon" href="https://res.cloudinary.com/ddu0ww15f/image/upload/v1568675580/icons8-joe-pineapples-16_xhpzbw.png" type="img/x-icon">
     <link rel="stylesheet" type="text/css" href="main.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&display=swap">
</head>
<body>
        
    <main class="container2">
            <div class="inner-wrap" id="signup">
                    <div class="form-head">
                            <h2>Sign Up</h2>
                        </div> 
                    
                        <p>Create Your Team Elite Account</p>
                        <div class="content">
						<form action="" method="POST">
                            <label for="Name">Full Name:</label><br>
                            <input type="text" class="fill" name="FullName" placeholder="Type Your Full Name" required><br>
                            <label for="Email">Email:</label><br>
                            <input type="email" class="fill" name="email" placeholder="Type Your Email" required><br>
                            <label for="Password">Password:</label><br>
                            <input type="password" class="fill" name="password" placeholder="Enter Your Password" ><br>
                            <label for="confirm-password">Confirm Password:</label>
                            <input type="password" class="fill" name="confirm Password" placeholder="Confirm Password"><br>
                            <input type="submit" class="btn" name="SignUp_submit" value="Create Account">
							
                            <?php
                            if (isset($_POST['SignUp_submit'])) {
                                
                                $email = $_POST['email'];
								$fn = $_POST['FullName'];
								$pw = $_POST['password'];
								
								
					

				$tp = mysqli_query($con, "INSERT INTO team_elite (user_id,fullname,password) VALUES ('$email','$fn','$pw' ) ") or die (mysqli_error($con));
								 if ($tp){				
						?>
                    <script>
					alert("Hurray !\n Successfully Registered!!");
                        
                    </script>
                    <?php
							
					}else{
						?>
                    <script>
					alert("Oops ! \n Encountered Error during registeration !!");
                       
                    </script>
                    <?php
					}
					
                }
				
                ?>
							</form>
                        </div>
                        <div class="login">
                            <p>Already have an account? <a href="Login.php">Login.</a></p>
                        </div>
                    
                </div>
        <div class="showcase" id="showcase">
                <div class="header">
                        <h3>Some Popular Languages You Can Learn</h3>
                 </div>
            <div class="program-img program-img1" id="top">
                <img src="https://res.cloudinary.com/davestrings/image/upload/v1568731762/HNG%20projects/download_s1xpcg.png" alt="React js" >
                <p>React Js</p>
            </div>
            <div class="program-img program-img2"id="top">
                <img src="https://res.cloudinary.com/davestrings/image/upload/v1568731753/HNG%20projects/download_3_aczj5f.png" alt="Vanilla js">
                <p>Vanilla Js</p>
            </div>
            <div class="program-img program-img1" id="middle">
                <img src="https://res.cloudinary.com/davestrings/image/upload/v1568731759/HNG%20projects/download_1_hsg6vs.png" alt="Angular js">
                <p>Angular Js</p>
            </div>
            <div class="program-img program-img2" id="middle">
                <img src="https://res.cloudinary.com/davestrings/image/upload/v1568731756/HNG%20projects/download_2_awc7u8.png" alt="Vue js">
                <p>Vue Js</p>
            </div>
            <div class="program-img program-img1" id="bottom">
                <img src="https://res.cloudinary.com/davestrings/image/upload/v1568731719/HNG%20projects/images_lxjgn3.png" alt="Mysql">
                <p>MySQL</p>
            </div>
            <div class="program-img program-img2" id="bottom">
                <img src="https://res.cloudinary.com/davestrings/image/upload/v1568731745/HNG%20projects/images_cjj0je.jpg" alt="Bootstrap">
                <p>Bootstrap</p>
            </div>
            <div class="program-img program-img1" id="last">    
                <img src="https://res.cloudinary.com/davestrings/image/upload/v1568731733/HNG%20projects/download_4_xjlybc.png" alt="PHP">
                <p>PHP</p>
            </div>
        </div>
    
    </main>
    <div class="footer">
            <p>&copy; 2019 | Team Elite</p>
        </div>
</body>
</html>