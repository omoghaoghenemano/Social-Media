<?php
session_start();
include_once('config.php');
$email = $_POST['email'];
$password = $_POST['password'];
					
					$result = mysqli_query($conn , "select * from user where user_email='$email' and user_password='$password'");
					while($row = mysqli_fetch_assoc($result))
					{
						$name = $row['user_name'];
						}
					
					
					if(mysqli_num_rows($result)>0){
						echo "success";
						$_SESSION['email'] = $email;
						$_SESSION['password'] = $password;
						$_SESSION['name'] = $name;
						
						$query = mysqli_query($conn,"UPDATE user
SET user_status = '1'
WHERE user_email = '$email';");
						
						header('location: chatroom.php');
						
						}
						else {
							echo "failed";
							header('location: practice.php?login_error=<span style="color:red">Username or password is wrong</span>');
							}	
					
	

 ?>