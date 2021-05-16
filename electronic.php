<?php 
    $artistname="";
    $songname="";
    $url="";
    $categoryDB="";
    $lyrics="";
    $urlimg="png.png";
    $result1="";
    $back="back.jpg.jpg";
    $username="";
    $namecateg="electronic";
    include ("auth.php");
    $con = mysqli_connect("127.0.0.1","root","","music");
    echo mysqli_error($con);
    if(isset($_POST['submit'])){
        $categoryDB=$_POST['category'];
    }
    $Usrenamee=$_SESSION['user'];
    include ("funnnextpre1.php");
    include("elseif.php");                  //btn category
    $user="SELECT * FROM users WHERE username='$username'";   
    $result2=mysqli_query($con,$user);
    include("fav.php");             // btn favorite
?>
<html>
 <head>
    <title>RanMusic</title>
    <meta charset="utf-8">
    <meta name="RanMusic" content="Join us and Enjoy The Music">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="catecss.css">
    <style>
        body {
            background-image: url(<?php echo $urlimg;?>), url(back.jpg.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
        
        #btnfav:hover {
            transform: scale(1.2);
        }
    </style>
 <head>  
  <body>
        <div class="container" >
            <!--logo-->
            <a class="navbar-brand" href="home1.php">
            <img src="1.png"class="d-inline-block align-top" alt="Ranmusic" loading="lazy">
            </a>
        </div>
    <div>
        <span id="artistname"><?php echo $artistname;?></span>
        <span id="songname"><?php echo $songname;?></span>
        <span> <?php echo "<audio id='audio' src='$url' controls autoplay controlslist='nodownload'></audio>";?></span>
        <div id="lyrics"><p id="ll1" onclick="myFunction();">lyrics:</p> <p id="lyrics1"><?php echo $lyrics;?></p>
        <img class="imgmore" onclick="myFunction();" src="https://img.icons8.com/officel/30/000000/more.png" id="more"/>
    </div>
    <div>
            <?php echo "<img  id='urlimg' src='$urlimg' alt='img'/>";?></div>
                <form method="POST"id="frm">
        <select name="category" class="category" >
        <option name="general">Eeneral</option>
        <optgroup label="Arabic"></optgroup>
        <option name="classic" >Classic</option>
        <option name="romantic" >Romantic</option>
        <option name="sad">Sad</option>
        <option name="others">Others</option>
        <optgroup label="English"></optgroup>
        <option name="pop" >Pop</option>
        <option name="rock">Rock</option>
        <option name="alternative" >Alternative</option>
        <option name="RAP">RAP</option>
        <option name="electronic" selected>Electronic</option>
        <option name="metal">Metal</option>
        <option name="classical" >Classical</option>
        <option name="R'n'B">R'n'B</option>

        </select>

        <input type="submit"name="submit" value="Random" class="submit" >
        </form>
        <nav>
            <ul>
                <li><a href="#"> <img id="picuser" src="https://img.icons8.com/bubbles/200/000000/user-male.png"/><?php echo ($_SESSION['user']);?></a>
            <ul>
            <li><a href="favorite.php" target="_blank">Your Favorites😍</a></li>
                                <li><a href="changepassword.php" target="_blank">Change Password🔐</a></li>
                                <li><a href="logout.php">Logout🚪</a> </li>
                </ul>  
            </ul>      
                </li>           
        </nav> 
    </div>
    <form method="POST"name="loginform">
                <button id="btnpre" name="pre"><img id="pre" src="https://img.icons8.com/bubbles/100/000000/fast-forward.png"/></button>                                          <!-- pre button -->
            </form>
            <form method="POST" >
                <button id="btnnext" name="next" onclick=" location.reload();" ><img id="next" src="https://img.icons8.com/bubbles/100/000000/fast-forward.png"/></button>       <!-- next button -->
    </form>
    <script>
        var vid = document.getElementById("audio");
        vid.onended = function() {
        location.reload(); 
        };  //reload page when audio finish

        function myFunction() {
        var x = document.getElementById("lyrics1");
        if (x.style.display === "none") {
        x.style.display = "block";
        } else {
        x.style.display = "none";
        }
        } /// pop up lyris=cs

         document.addEventListener('contextmenu', function(e) { 
        e.preventDefault(); 
        }); // pervent inspect 

        $(document).ready(function () {
        $('#btnfav').click(function (e) {
            e.preventDefault();
            var songname = $('#songname').val();
            var artistname = $('#artistname').val();
            var url = $('#url').val();
            var img =$('#urllimgg').val();
            var lyrics = $('#llyrics').val();
            $.ajax
                ({
                type: "POST",
                url: "electronic.php",
                data: { "fav": 1, "songname": songname,"url": url,"lyrics":lyrics ,"urlimg":img},
                success: function (data) {
                    <?php echo "success";?>;
                }
                ,error:function(date){
                    <?php echo "error";?>;
                }
                });
            });
        });           ////save data 
    </script>  
    <input type="submit" id="btnfav" name="favorite" value="😍Love" />
  </body>
</html>