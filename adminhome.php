
<?php
  $result="";
  $factselid="";
  $selectid="";
  $artistname="";
  $category="";
  $lyrics="";
  $urlimg="";
  include 'connect.php';
  $conn = mysqli_connect("127.0.0.1","root","","music");
  if (isset($_POST['btnjoin'])){
      //fetch data
  $artistname = mysqli_real_escape_string($con,$_POST["artistname"]);
  $songname = mysqli_real_escape_string($con,$_POST["songname"]);
  $url = mysqli_real_escape_string($con,$_POST["url"]);
  $category=mysqli_real_escape_string($con,$_POST['category']);
  $lyrics=mysqli_real_escape_string($con,$_POST['lyrics']);
  $urlimg=mysqli_real_escape_string($con,$_POST['urlimg']);
  $artistname = mysqli_real_escape_string($conn,$_POST["artistname"]);
  $songname = mysqli_real_escape_string($conn,$_POST["songname"]);
  $url = mysqli_real_escape_string($conn,$_POST["url"]);
  $category=mysqli_real_escape_string($conn,$_POST['category']);
  $lyrics=mysqli_real_escape_string($conn,$_POST['lyrics']);
  $urlimg=mysqli_real_escape_string($conn,$_POST['urlimg']);
  if($category=="classic"){
          //insert data
  $query = "INSERT into generalsong (artistname, songname, url,lyrics,urlimg)
  VALUES ('$artistname', '$songname', '$url','$lyrics','$urlimg')";
  $result = mysqli_query($con,$query);echo mysqli_error($con);
  $sql="INSERT into classic (artistname, songname, url,lyrics,urlimg)
  VALUES ( '$artistname', '$songname', '$url','$lyrics','$urlimg')";
  $result1 = mysqli_query($conn,$sql);echo mysqli_error($conn);}
  } if( $category=="others"){$query = "INSERT into generalsong (artistname, songname, url,lyrics,urlimg)
      VALUES ('$artistname', '$songname', '$url','$lyrics','$urlimg')";
      $result = mysqli_query($con,$query);echo mysqli_error($con);
      $sql="INSERT into others (artistname, songname, url,lyrics,urlimg)
      VALUES ( '$artistname', '$songname', '$url','$lyrics','$urlimg')";
      $result1 = mysqli_query($conn,$sql);echo mysqli_error($conn);}
  if($category=="romantic"){$query = "INSERT into generalsong (artistname, songname, url,lyrics,urlimg)
      VALUES ('$artistname', '$songname', '$url','$lyrics','$urlimg')";
      $result = mysqli_query($con,$query);echo mysqli_error($con);
      $sql="INSERT into romantic (artistname, songname, url,lyrics,urlimg)
      VALUES ( '$artistname', '$songname', '$url','$lyrics','$urlimg')";
      $result1 = mysqli_query($conn,$sql);echo mysqli_error($conn);} 
  if($category=="sad"){$query = "INSERT into generalsong (artistname, songname, url,lyrics,urlimg)
      VALUES ('$artistname', '$songname', '$url','$lyrics','$urlimg')";
      $result = mysqli_query($con,$query);echo mysqli_error($con);
      $sql="INSERT into sad (artistname, songname, url,lyrics,urlimg)
      VALUES ( '$artistname', '$songname', '$url','$lyrics','$urlimg')";
      $result1 = mysqli_query($conn,$sql);echo mysqli_error($conn);}         
    if($category=="pop"){$query = "INSERT into generalsong (artistname, songname, url,lyrics,urlimg)
      VALUES ('$artistname', '$songname', '$url','$lyrics','$urlimg')";
      $result = mysqli_query($con,$query);echo mysqli_error($con);
      $sql="INSERT into pop (artistname, songname, url,lyrics,urlimg)
      VALUES ( '$artistname', '$songname', '$url','$lyrics','$urlimg')";
      $result1 = mysqli_query($conn,$sql);echo mysqli_error($conn);}
    if($category=="rock"){$query = "INSERT into generalsong (artistname, songname, url,lyrics,urlimg)
      VALUES ('$artistname', '$songname', '$url','$lyrics','$urlimg')";
      $result = mysqli_query($con,$query);echo mysqli_error($con);
      $sql="INSERT into rock (artistname, songname, url,lyrics,urlimg)
      VALUES ( '$artistname', '$songname', '$url','$lyrics','$urlimg')";
      $result1 = mysqli_query($conn,$sql);echo mysqli_error($conn);} 
    if($category=="alternative"){$query = "INSERT into generalsong (artistname, songname, url,lyrics,urlimg)
      VALUES ('$artistname', '$songname', '$url','$lyrics','$urlimg')";
      $result = mysqli_query($con,$query);echo mysqli_error($con);
      $sql="INSERT into alternative (artistname, songname, url,lyrics,urlimg)
      VALUES ( '$artistname', '$songname', '$url','$lyrics','$urlimg')";
      $result1 = mysqli_query($conn,$sql);echo mysqli_error($conn);}
    if($category=="RAP"){$query = "INSERT into generalsong (artistname, songname, url,lyrics,urlimg)
      VALUES ('$artistname', '$songname', '$url','$lyrics','$urlimg')";
      $result = mysqli_query($con,$query);echo mysqli_error($con);
      $sql="INSERT into rab (artistname, songname, url,lyrics,urlimg)
      VALUES ( '$artistname', '$songname', '$url','$lyrics','$urlimg')";
      $result1 = mysqli_query($conn,$sql);echo mysqli_error($conn);}
    if($category=="electronic"){$query = "INSERT into generalsong (artistname, songname, url,lyrics,urlimg)
      VALUES ('$artistname', '$songname', '$url','$lyrics','$urlimg')";
      $result = mysqli_query($con,$query);echo mysqli_error($con);
      $sql="INSERT into electronic (artistname, songname, url,lyrics,urlimg)
      VALUES ( '$artistname', '$songname', '$url','$lyrics','$urlimg')";
      $result1 = mysqli_query($conn,$sql);echo mysqli_error($conn);}
    if($category=="metal"){$query = "INSERT into generalsong (artistname, songname, url,lyrics,urlimg)
      VALUES ('$artistname', '$songname', '$url','$lyrics','$urlimg')";
      $result = mysqli_query($con,$query);echo mysqli_error($con);
      $sql="INSERT into metal (artistname, songname, url,lyrics,urlimg)
      VALUES ( '$artistname', '$songname', '$url','$lyrics','$urlimg')";
      $result1 = mysqli_query($conn,$sql);echo mysqli_error($conn);}
    if($category=="classical"){$query = "INSERT into generalsong (artistname, songname, url,lyrics,urlimg)
      VALUES ('$artistname', '$songname', '$url','$lyrics','$urlimg')";
      $result = mysqli_query($con,$query);echo mysqli_error($con);
      $sql="INSERT into classical (artistname, songname, url,lyrics,urlimg)
      VALUES ( '$artistname', '$songname', '$url','$lyrics','$urlimg')";
      $result1 = mysqli_query($conn,$sql);echo mysqli_error($conn);}
    if($category=="rnb"){$query = "INSERT into generalsong (artistname, songname, url,lyrics,urlimg)
      VALUES ('$artistname', '$songname', '$url','$lyrics','$urlimg')";
      $result = mysqli_query($con,$query);echo mysqli_error($con);
      $sql="INSERT into rnb (artistname, songname, url,lyrics,urlimg)
      VALUES ( '$artistname', '$songname', '$url','$lyrics','$urlimg')";
      $result1 = mysqli_query($conn,$sql);echo mysqli_error($conn);}
  if($result){
  echo "<div id='form' style='background-image: url(back.jpg.jpg);padding:0px ; margin:-7.7px ; background-size: cover; height: 102%; position: inherit;'>
          
  <a class='navbar-brand'href='registration.php'>
  <img src='1.png'class='d-inline-block align-top' alt='Ranmusic' loading='lazy'style='width:143px;'>
  </a>
  <table>
  <td><tr colspan='2'><h3 style= 'background-color: rgb(0,0,0,0.2); width: 340px;height: 62px;position: relative;left: 560px; border-radius: 9px; color: white;'>You are added this song successfully. <br> Click here to <a href='adminhome.php' style='text-decoration: none;color: #e2cb25;'>Add New Song</a></h3> </tr></td>
  </table>
  </form>
    </div>";
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
           width: 143px;
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
       #form{text-decoration: none;color: #e2cb25;}
   </style>
  <head>  
  <body>
      
      <!--logo-->
    <div class="container" >
        <!--logo-->
        <a class="navbar-brand" href="home.html">
          <img src="1.png"class="d-inline-block align-top" alt="Ranmusic" loading="lazy">
        </a>

        <form method="POST" action="adminhome.php">
            <div class="form-group">
              <table>
                <td>
                    <tr><label>artist name: </label></tr>
                    <tr>
                      <input type="text" class="form-control" placeholder="artistname" name="artistname" id="artistname" required>
                    </tr>
                </td>
                <td>
                    <tr><label>song name: </label></tr>
                    <tr>
                        <input type="text" class="form-control" id="songname" aria-describedby="emailHelp"placeholder=" song name" name="songname" id="songname"required>
                    </tr>
                </td>
                <td>
                    <tr><label>url: </label></tr>
                    <tr>
                        <input type="text" class="form-control" id="url"placeholder="url" name="url" id="url"required>
                    </tr>
                </td>
                <tr><label>category : </label></tr>
                    <tr>
                        <input type="text" class="form-control" id="category"placeholder="category" name="category" id="category"required>
                    </tr>
                    <td>
                    <tr><label>lyrics: </label></tr>
                    <tr>
                        <input type="text" class="form-control" id="lyrics"placeholder="lyrics" name="lyrics" id="lyrics"required>
                    </tr>
                </td>
                <td>
                    <tr><label>url img: </label></tr>
                    <tr>
                        <input type="text" class="form-control" id="urlimg"placeholder="ulr img" name="urlimg" id="urlimg"required>
                    </tr>
                </td>
                </td>

                    <tr colspan="2" > <input type="submit" class="btn btn-primary" value="Add song" name="btnjoin"></input> </tr>
                </td>
              </table>
          </form>
    </div>
    <?php } ?>
   </body>
</html>
