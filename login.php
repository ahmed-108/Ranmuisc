<?php
$result="";
include 'connect.php';
session_start();
if (isset($_POST['user'])){
$username = mysqli_real_escape_string($con,$_POST["user"]); 
$password = mysqli_real_escape_string($con,$_POST["pas"]); 
 $query = "SELECT * FROM users WHERE username='$username'
        and PASS='$password'";
$authuser="SELECT username FROM users ";
$authpass="SELECT PASS FROM users";
$result = mysqli_query($con,$query) ;
$rows = mysqli_num_rows($result);
    if($rows==1){
    $_SESSION['user'] = $username;
    header("Location: home1.php");
    }else{
    echo "<div id='form' style='background-image: url(back.jpg.jpg);padding:0px ; margin:-7.7px ; background-size: cover; height: 102%; position: inherit;'>                                           
<a class='navbar-brand'href='registration.php'>
<img src='1.png'class='d-inline-block align-top' alt='Ranmusic' loading='lazy'style='width:143px;'>
</a>
<table>
<td><tr colspan='2'><h3 style= 'background-color: rgb(0,0,0,0.2); width: 340px;height: 62px;position: relative;left: 560px; border-radius: 9px; color: white;'>Username/password is incorrect. <br> Click here to <a href='login.php' style='text-decoration: none;color: #e2cb25;'>login</a></h3> </tr></td>
</table></form></div>";}
 }
else{
?>
<html>
  <head>
   <title>RanMusic</title>
   <meta charset="utf-8">
   <meta name="RanMusic" content="Join us and Enjoy The Music">
   <link rel="stylesheet" type="text/css" href="bootstrap.css">
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <style>
    * {
        outline: none;
      }
    body{
        background-image: url(back.jpg.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        }
    .d-inline-block{
        width: 180;
        }
    .container{
        padding-right: 0;
        padding-left: 0;
        margin-right: 0;
        margin-left: 0;
       }
    .form-group{
        position: relative;
        left: 316;
        width: 80%;
        padding: 20px;
        background-color: rgb(0,0,0,0.2);
        border-radius: 40px;
        bottom: -7px;
        }
    label{color: white;}
    .form-control:focus{box-shadow: 0 0 0 0.2rem rgb(231 208 38 / 40%);}
   </style>
  <head>  
  <body>
      
    <div class="container" >
        <a class="navbar-brand" href="home.html">
          <img src="1.png"class="d-inline-block align-top" alt="Ranmusic" loading="lazy">
        </a>
        <form method="POST" action="login.php"name="loginform"class="needs-validation" novalidate>
            <div class="form-group">
              <table>
                  <td>
                    <tr><label> Username:</label> </tr>
                    <tr>
                        <input type="text" class="form-control" placeholder="username"name="user"id="username1" required>
                    </tr>
                </td>
                <td>
                    <tr><label>Password: </label></tr>
                    <tr>
                      <input type="password" class="form-control" placeholder=" Password" name="pas" id="pass" required>
                    </tr>
                </td>
                <tr colspan="2" > <input type="submit" class="btn btn-primary" value="login" name="Login Now"></input> </tr>
                    </td>
                </td>
              </table>
          </form>
          <p style="color: white;">Not registered yet? <a href='registration.php'>Register Here</a></p>
    </div>
    <?php } ?>
    <script>
      document.addEventListener('contextmenu', function(e) { 
	    e.preventDefault();}); 
    </script>
   </body>
</html>