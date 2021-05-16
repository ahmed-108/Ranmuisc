<?php 
  session_start();
  $urll="";
  $Usrenamee=$_SESSION['user'];
  $conn = mysqli_connect("127.0.0.1","root","","register");
  $strSQL = "SELECT * FROM $Usrenamee" ;
  $quere=mysqli_query($conn,$strSQL);
  $songname="";$artistname="";
  $numfav="";
  $username="";
  $user="SELECT * FROM users WHERE username='$username'";   
  $result2=mysqli_query($conn,$user);
  if(!isset($_SESSION['old_value'])||$_SESSION['old_value']>=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM $Usrenamee"))){
    $_SESSION['old_value'] =0;
  }else if($_SESSION['old_value']<=0){
    $_SESSION['old_value'] =0;
  }
  if(!isset($_POST['pre'])){
    $random1 = $_SESSION['old_value'] + 1;
    $_SESSION['old_value'] = $random1;
  }else{
    $random1=$_SESSION['old_value']-2;$_SESSION['old_value']=$random1;header("location:Untitled-1.php");
  }
  $Quere="SELECT * FROM $Usrenamee WHERE id='$random1'";
  $result1=mysqli_query($conn,$Quere);
  $data=mysqli_fetch_array($result1);
  if (mysqli_num_rows($result1)==0){
    echo "<div id='favlist'> <span>Nothing to hear here☹️</span> </div>";
  }else{
  $id=$data[0];
  $artistname.=$data[1];
  $songname.=$data[2];
  $urll=$data[3];
  $lyricss=$data[4];
  $urlimg=$data[5];}
?>
<html>
  <head>
    <title>RanMusic</title>
    <meta charset="utf-8">
    <meta name="RanMusic" content="Join us and Enjoy The Music">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="cssfav.css">
    <style>
     body{
           
           background-image:url(<?php echo $urlimg;?>),url(back.jpg.jpg);
           background-size: cover;
           background-repeat: no-repeat;
       }
    </style>
  </head>  
  <body>
    <div class="container" >
        <!--logo-->
        <a class="navbar-brand" href="home1.php">
          <img src="1.png"class="d-inline-block align-top" alt="Ranmusic" loading="lazy">
        </a>
    </div>

    <div class="">

   <table class="table table-bordered table-striped mb-0"cellspacing="0" cellpadding="1" width="300" >        
    <?php while($row = mysqli_fetch_array($quere)){ 
    $img=$row['urlimg']; $url=$row['url'];$lyrics=$row['lyrics'];?>
    <tbody>
      <tr>
        <td><?php echo $row['artistname'];?></td>
        <td><?php echo $row['songname'];?></td>
        <td><?php echo "<img  id='urlimgg' src='$img' alt='img'/>"?></td>
      </tr>
    
    </tbody>
    <?php }?>
   </table>
</div> 

    <span id="artistname"><?php echo $artistname;?></span>
    <span id="songname"><?php echo $songname;?></span>
    <span> <?php echo "<audio id='audio' src='$urll' controls autoplay controlslist='nodownload'></audio>";?></span>
  <div id="lyrics">
      <p id="ll1" onclick="myFunction();"></p> <p id="lyrics1"><?php echo $lyricss;?></p>
      <img class="imgmore" onclick="myFunction();" src="https://img.icons8.com/clouds/100/000000/note.png" id="more"/>
  </div>
  <nav>
          <ul>
              <li><a href="#"> <img id="picuser" src="https://img.icons8.com/bubbles/200/000000/user-male.png"/><?php echo ($_SESSION['user']);?></a>
          <ul>
                              <li><a href="changepassword.php" target="_blank">Change Password🔐</a></li>
                              <li><a href="logout.php">Logout🚪</a> </li>
              </ul>  
          </ul>      
              </li>           
  </nav> 
    <form method="POST">
              <button id="btnpre" name="pre"><img id="pre" src="https://img.icons8.com/bubbles/100/000000/fast-forward.png"/></button>                                          <!-- pre button -->
    </form>
    <form method="POST" >
        <button id="btnnext" name="next" onclick=" location.reload();" ><img id="next" src="https://img.icons8.com/bubbles/100/000000/fast-forward.png"/></button>       <!-- next button -->
    </form>         
    <script>
      function myFunction() {
      var x = document.getElementById("lyrics1");
      if (x.style.display === "none") {
      x.style.display = "block";
      } else {
      x.style.display = "none";

      }
      }
      var vid = document.getElementById("audio");
          vid.onended = function() {
          location.reload();};  

      document.addEventListener('contextmenu', function(e) { 
      e.preventDefault(); 
      }); 
    </script>
  </body>
</html>