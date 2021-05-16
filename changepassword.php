<?php 
session_start();
include 'connect.php';
$confirmnewpassword="";
$newpassword="";
if(isset($_POST['user'])){
        $username =mysqli_real_escape_string($con,$_POST['user']);
        $password = mysqli_real_escape_string($con,$_POST['oldpas']);
        $newpassword = mysqli_real_escape_string($con,$_POST['newpas']);
        $confirmnewpassword =mysqli_real_escape_string($con,$_POST['connewpass']);
       /* $newpassword1= md5($newpassword);
        $confirmnewpassword1=md5($confirmnewpassword);
        $password1=md5($password);*/
        if(count($_POST)>0)
        {
            
            
            $result = mysqli_query($con,"SELECT PASS FROM users WHERE username='$username'");
            $row=mysqli_fetch_array($result);
             if($confirmnewpassword!=$newpassword){
                echo"<div class='alert alert-danger' role=alert'> The New Password doesn't match</div";
             }else if(($password==$row['PASS'] ) && ($confirmnewpassword==$newpassword)){
                $sql=mysqli_query($con,"UPDATE users SET PASS='$newpassword' where username='$username'");echo"<div class='alert alert-success role='alert'> Password has changed</div" ;
            }else{echo"<div class='alert alert-danger' role=alert'>The current password is incorrect</div";
            }
        }
    }
?>
<html>
  <head>
    <title>RanMusic</title>
    <meta charset="utf-8">
    <meta name="RanMusic" content="Join us and Enjoy The Music">
   <link rel="stylesheet" type="text/css" href="bootstrap.css">
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <style>
       .alert-danger{height: 41px;}
       .alert-success{height: 41px;}
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
           left: 275px;
           width: 80%;
           padding: 20px;
           background-color: rgb(0,0,0,0.2);
           border-radius: 40px;
           bottom: 20px;
       }
       label{color: white;}
       .form-control:focus{box-shadow: 0 0 0 0.2rem rgb(231 208 38 / 40%);}
   </style>
  <head>  
  <body>
      
      <!--logo-->
    <div class="container" >
        <!--logo-->
        <a class="navbar-brand" href="home1.php">
          <img src="1.png"class="d-inline-block align-top" alt="Ranmusic" loading="lazy">
        </a>

        <!--formlogin-->

        <form method="POST" action="changepassword.php"name="loginform">
            <div class="form-group">
              <table>
                  <td>
                    <tr><label> Username:</label> </tr>
                    <tr>
                        <input type="text" class="form-control" placeholder="username"name="user"id="username1" required="please enter your username"onblur="this.value=removeSpaces(this.value);" value="<?php echo ($_SESSION['user']);?>" readonly>
                    </tr>
                </td>
                <td>
                    <tr><label>old Password: </label></tr>
                    <tr>
                      <input type="password" class="form-control" placeholder=" Password" name="oldpas" id="pass" required="please enter your old password">
                    </tr>
                </td>
                <td>
                    <tr><label>new Password: </label></tr>
                    <tr>
                      <input pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="that must contain 8 or more characters that are of at least one number, and one uppercase and lowercase letter" autocomplete="off"  type="password" class="form-control" placeholder="Password" name="newpas" id="pass" required>
                    </tr>
                </td>
                <td>
                    <tr><label> confirm new Password: </label></tr>
                    <tr>
                      <input pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="that must contain 8 or more characters that are of at least one number, and one uppercase and lowercase letter" autocomplete="off"  type="password" class="form-control" placeholder=" Password" name="connewpass" id="pass" required>
                    </tr>
                </td>
                <tr colspan="2" > <input type="submit" class="btn btn-primary" value="change password"></input> </tr>
                    </td>
                </td>
              </table>
          </form>
    </div>
    <script>
    function removeSpaces(string) {
 return string.split(' ').join('.');}</script>
   </body>
</html>