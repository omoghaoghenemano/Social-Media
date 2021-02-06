<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <head>
        <title>Cinema Movies</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    </head>

    <style>
                * {
                    margin: 0;
                    padding: 0;
                }
                body {

                    background-repeat: no-repeat;
                    margin: 0;
        			background-color:white;

                }
        		.navbar {
          width: 100%;
          background-color: white;
          overflow: auto;
        }
         .dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
        .navbar a {
          float: left;
          padding: 12px 75px;
          color: black;
          text-decoration: none;
          font-size: 17px;
        }

        .navbar a:hover {
          background-color: #ddddbb;
        }

        .active {
          background-color: white ;
        }

        @media screen and (max-width: 500px) {
          .navbar a {
            float: none;
            display: block;
          }

                h2 {
                    color: white;
                    text-align: left-side;
                }
                p {
                    font-family: verdana;
                    font-size: 10px;
                    color: white;
        			float:right;
        			text-align:rightwards;
                }
                a {
                    color: white;
                    text-indent: 50px;

                }
        		.type{
        		    background-color:#f2f2f2
        		    }
                .button {
                    color: black;

                    background-color: black;
                }
                .header-btn {
                    text-decoration: none;

                    padding: 10px 20px;
                    float: left;
                    margin-top: 5px;
                    color: black !important;

                    font-weight: 600;
                }
                .align {
                    text-decoration: none;
                    border-radiuse: 12px;
                    padding: 6px 20px;
                    float: right;
                    margin-top: 5px;

                    color: #fff !important;

                    font-weight: 600;

                    background-color: blue;
                }
                .container {
                    background-color: black;
                    color: white;
                    text-align: left;
                }
                .topnav {
                    overflow: hidden;
                    background-color: black;
                }

                .topnav a {
                    float: right;
                    display: inline;
                    color: black;
                    text-align: left;
                    padding: 14px 16px;
                    text-decoration: none;
                    font-size: 17px;
                }

                .topnav a:hover {
                    background-color: #ddddbb;
                    color: black;
                }

                .topnav a.active {
                    background-color: #2196f3;
                    color: white;
                }

                .topnav .search-container {
                    float: right;
                }

                .topnav input[type="text"] {
                    padding: 6px 45px;
                    margin-top: -50px;
                    font-size: 17px;
                    border: none;
                }

                .topnav .search-container button {
                    float: right;
                    padding: 6px 14px;
                    margin-top: 14px;
                    margin-right: 17px;
                    background: #ddddbb;
                    font-size: 17px;
                    border: none;
                    cursor: pointer;
                }

                .topnav .search-container button:hover {
                    background: #ddddbb;
                }

                @media screen and (max-width: 600px) {
                    .topnav .search-container {
                        float: none;
                    }
                    .topnav a,
                    .topnav input[type="text"],
                    .topnav .search-container button {
                        float: none;
                        display: inline;
                        text-align: left;
                        width: 100%;
                        margin: 0;
                        padding: 14px;
                    }
                    .topnav input[type="text"] {
                        border: 1px solid #ccc;
                    }
                    .sidenav {
                        height: 100%;
                        width: 0;
                        position: fixed;
                        z-index: 1;
                        top: 0;
                        left: 0;
                        background-color: black;
                        overflow-x: hidden;
                        transition: 0.5s;
                        padding-top: 60px;
                    }

                    .sidenav a {
                        padding: 8px 8px 8px 32px;
                        text-decoration: none;
                        font-size: 25px;
                        color: white;
                        display: inline;
                        transition: 0.3s;
                    }

                    .sidenav a:hover {
                        color: #f1f1f1;
                    }

                    .sidenav .closebtn {
                        position: absolute;
                        top: 0;
                        right: 25px;
                        font-size: 36px;
                        margin-left: 50px;
                    }
                    @media screen and (max-height: 450px) {
                        .sidenav {
                            padding-top: 15px;
                        }
                        .sidenav a {
                            font-size: 18px;
                        }
                    }

                }
    </style>
	<?php
session_start();
 ?>
<script>
	
function getText() {
		
	var $a =	document.getElementById('text').value;
	
		xhr = new XMLHttpRequest();
		xhr.open('POST' , 'chatdb.php',true);
		xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
		xhr.send('chat='+$a);
		xhr.onreadystatechange=function(){
			if (xhr.responseText){
			//	document.getElementById('chatarea').innerHTML=xhr.responseText;
									}
				}
					}
		

function setText(){
	
	xhr = new XMLHttpRequest();
	xhr.open('POST' , 'chatFetch.php' , true);
	xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
	xhr.send();
	xhr.onreadystatechange = function(){
	//	alert(xhr.responseText);
			document.getElementById('chatarea').innerHTML = xhr.responseText;
			}
		
	}
	setInterval("setText()",2000);
	
	
setInterval("users()",3000);

	
	function users(){
	xhr1 = new XMLHttpRequest();
	xhr1.open('POST' , 'userFetch.php' , true);
	xhr1.setRequestHeader('content-type','application/x-www-form-urlencoded');
	xhr1.send();
	xhr1.onreadystatechange = function(){
	//	alert(xhr.responseText);
			document.getElementById('loginperson').innerHTML = xhr1.responseText;
			}
		
		
		}
		
		
</script>
<?php

include_once('config.php');
				//	echo		$_SESSION['email'];
				//	echo	$_SESSION['password'];
			echo	$_SESSION['name'];
					
					
					
						
if (isset($_GET['logout'])){
	$result = mysqli_query($conn, "UPDATE user
SET user_status = '0'
WHERE user_email = '$_SESSION[email]';");
session_destroy();
header('location: practice.php?logout_successfully=<span style="color:green">You have successfully Logged Out.</span>');
	
	}

?>
<form action="">
<input type="submit" name="logout" value="logout">
</form>
<div id="chatbox">

<div id ="chatarea">
</div>

<div id="loginperson">
</div>

<div id="textbox">
<form>
<textarea rows="4" cols="100" id="text"></textarea>
<input type="button" value="send"  onclick="getText()" />
</form>
</div></center>

</div>
<style>
#chatbox
{		
			border:double;
			height:500px;
			width:1000px;
			align;
			}
			#chatarea {
				width:750px;
				height:400px;
				border:double;
				float:left;
				overflow:auto;

				}
				#loginperson {
					width:238px;
					height:497px;
					border:double;
					float:right;}
					#textbox {
						width:750px;
						height:89px;
						border:double;
						float:left;
						}
						#chatting {
							float:left;}
</style>
<?php
	if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
		//session_destroy();
		header('location: practice.php');
		}

 ?>
 
 
    <div class="w3-sidebar w3-light-grey w3-bar-block" style="width: 19%;">
        <div class="search-container" style="margin-top: 10px;">
            <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search" style="margin-left: 10%;" />
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>

        <a href="#" class="w3-bar-item w3-button" style="margin-left: 10%;">Pages</a>
        <a href="#" class="w3-bar-item w3-button" style="margin-left: 10%;">Friends</a>
        <a href="#" class="w3-bar-item w3-button" style="margin-left: 10%;">Groups</a>
        <a href="#" class="w3-bar-item w3-button" style="margin-left: 10%;">Videos</a>
        <a href="#" class="w3-bar-item w3-button" style="margin-left: 10%;">Events</a>
    </div>

    <!-- Page Content -->
    <div style="margin-left: 15%;">
        <div class="header-btn">
            <div class="navbar">
                <a class="active" href="#"><i class="fa fa-fw fa-home" style="color: BLUE;"></i> Home</a>
                <p></p>
				<div class = "dropdown"

                <a href="chatroom.php" ><i class="fa fa-fw fa-envelope"></i> Message</a>
				

                <a href="password.html" id = "user"><i class="fa fa-fw fa-user"></i> Sign-in</a>
				
            </div>
        </div>
    </div>
</html>
