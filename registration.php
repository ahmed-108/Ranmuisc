<?php
$result="";
include 'connect.php';
if (isset($_POST['username'])){
    //fetch data
 $username = mysqli_real_escape_string($con,$_POST["username"]); 
 $email = mysqli_real_escape_string($con,$_POST["email"]);
 $password = mysqli_real_escape_string($con,$_POST["password"]);
 $name1 = mysqli_real_escape_string($con,$_POST["Name2"]);

//if user is exist or not 
$selectuser= "SELECT username FROM users WHERE username= '".$username."' ";
$factseluser= mysqli_query($con,$selectuser);
$num= mysqli_num_rows($factseluser);
//if email is exist or not 
$selectemail= "SELECT email FROM users WHERE email= '".$email."' ";
$factselemail= mysqli_query($con,$selectemail);
$numemail= mysqli_num_rows($factselemail);
if($num==1){// if exist print this
echo "<div id='form' style='background-image: url(back.jpg.jpg);padding:0px ; margin:-7.7px ; background-size: cover; height: 102%; position: inherit;'> 
<a class='navbar-brand'href='home.html'>
<img src='1.png'class='d-inline-block align-top' alt='Ranmusic' loading='lazy'style='width:143px;'>
</a><table>
<td><tr colspan='2'><h3 style= 'background-color: rgb(0,0,0,0.2); width: 340px;height: 62px;position: relative;left: 560px; border-radius: 9px; color: white;'>this user is exist. <br> <a href='registration.php' style='text-decoration: none;color: #e2cb25;'>Try Register Again</a></h3> </tr></td></table>
</form></div>";
// if email is exist twice print this 
}else if($numemail==2){
    echo "<div id='form' style='background-image: url(back.jpg.jpg);padding:0px ; margin:-7.7px ; background-size: cover; height: 102%; position: inherit;'> 
    <a class='navbar-brand'href='home.html'>
    <img src='1.png'class='d-inline-block align-top' alt='Ranmusic' loading='lazy'style='width:143px;'>
    </a><table>
    <td><tr colspan='2'><h3 style= 'background-color: rgb(0,0,0,0.2); width: 340px;height: 62px;position: relative;left: 560px; border-radius: 9px; color: white;'>This email has been registered twice. <br> <a href='registration.php' style='text-decoration: none;color: #e2cb25;'>Try Register Again</a></h3> </tr></td></table>
    </form></div>";
}else{
//بعمل ادخال للبيانات
$sql = "CREATE TABLE $username (
id INT(6)  AUTO_INCREMENT PRIMARY KEY,
artistname	varchar(1000) NOT NULL,
songname	varchar(1000) NOT NULL,
`url`	varchar(1000),
lyrics	varchar(1000),
urlimg	varchar(1000))";
mysqli_query($con,$sql);

$query = "INSERT into users (name, username, email, PASS)
VALUES ('$name1', '$username', '$email', '$password')";
$result = mysqli_query($con,$query);}
if($result){
echo "<div id='form' style='background-image: url(back.jpg.jpg);padding:0px ; margin:-7.7px ; background-size: cover; height: 102%; position: inherit;'>
<a class='navbar-brand'href='home.html'>
<img src='1.png'class='d-inline-block align-top' alt='Ranmusic' loading='lazy'style='width:143px;'></a>
<table><td><tr colspan='2'><h3 style= 'background-color: rgb(0,0,0,0.2); width: 340px;height: 62px;position: relative;left: 560px; border-radius: 9px; color: white;'>You are registered successfully. <br> Click here to <a href='login.php' style='text-decoration: none;color: #e2cb25;'>login</a></h3> </tr></td>
</table>
</form></div>";}
}else{   
?>
<html>
  <head>
    <title>RanMusic</title>
    <meta charset="utf-8">
    <meta name="RanMusic" content="Join us and Enjoy The Music">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
           left: 311;
           width: 80%;
           padding: 20px;
           background-color: rgb(0,0,0,0.2);
           border-radius: 40px;
           bottom: 34;
       }
       label{color: white;}
       .form-control:focus{box-shadow: 0 0 0 0.2rem rgb(231 208 38 / 40%);}
       #form{text-decoration: none;color: #e2cb25;}
       #exampleInputPassword1{-webkit-text-security: disc;}
   </style>
  <head>  
  <body>
      
      <!--logo-->
    <div class="container" >
        <a class="navbar-brand" href="home.html">
          <img src="1.png"class="d-inline-block align-top" alt="Ranmusic" loading="lazy">
        </a>
        <form method="POST" action="registration.php" name="frm" id="frm">
            <div class="form-group">
              <table>
                  <td>
                    <tr><label> Name:</label> </tr>
                    <tr>
                        <input type="text" class="form-control" placeholder="name"name="Name2"id="name" pattern="[A-Za-z].{1,32}" title="that must contain characters " required  >
                    </tr>
                </td>
                <td>
                    <tr><label>Username: </label></tr>
                    <tr>
                      <input pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}|[A-Za-z].{5,10}|[a-z].{5,10} " title="that must contain 5 or less than 10 characters that are of at least one number, and one uppercase and lowercase letter or contain uppercase letter  or lowercase letter or The two together" type="text" class="form-control" placeholder=" Username" name="username" id="username" required>
                    </tr>
                </td>
                <td>
                    <tr><label>email: </label></tr>
                    <tr>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder=" Your Email" name="email" id="email"required>
                    </tr>
                </td>
                <td>
                    <tr><label>Password: </label></tr>
                    <tr>
                        <input pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="that must contain 8 or more characters that are of at least one number, and one uppercase and lowercase letter" autocomplete="off" type="password" class="form-control" id="exampleInputPassword1"placeholder=" Your Password" name="password" required>
                    </tr>
                </td>
                    <tr colspan="2" > <input type="submit" class="btn btn-primary" value="Join US" name="btnjoin" ></input> </tr>
                </td>
                <br>
                <td>
                    <tr colspan="2">
                    <label style="padding-left: 300px;">
                     I already have an account <a href="login.php">login</a>
                    </label>
                    </tr>
                </td>
              </table>
          </form>
    </div>
    

    <?php }?>
    <script language="javascript" type="text/javascript">
        document.addEventListener('contextmenu', function(e) { 
	    e.preventDefault();}); 
    </script>
  </body>
</html>
