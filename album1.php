<?php
session_start(); 

/*if(!isset($_SESSION['old_value'])||$_SESSION['old_value']>=16){
    $_SESSION['old_value'] = 0;}
    if(isset($_POST['pre'])){$random=$_SESSION['old_value']-1;echo $random;}else{
$random = $_SESSION['old_value'] + 1;
$_SESSION['old_value'] = $random;
echo $random;}
setcookie($random, time()-3600);
if(isset($_POST['next'])){
    $url="https://ls18.arabmelody.net/3/ArabMelody_Net_Olsh_Bt7bh_79012.mp3";
  
}*/

class stack{
  public $random=[];
  public function pop(){
    if(!$this->isempty()){
      return array_shift($this->random);
    }else{
      return null;
    }
  }
  public function push($value){
    return array_unshift($this->random,$value);
  }
  public function top(){
    return current($this->random);
  }
  public function isempty(){
    return count($this->random)?false:true;
  }
 }

function testpop(){
  $stack=new stack();
  $stack->push(rand(1,10));
  $stack->push(rand(1,10));
  $stack->push(rand(1,10));
  $stack->push(rand(1,10));
  $stack->push(rand(1,10));
  $stack->push(rand(1,10));
  if(null!== $stack->pop()){
    echo "push ok";
    print_r($stack);
  }else{
    echo "failed"; 
  }
}
testpop();


$random=rand(1,50);



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
       .navbar-brand{position: relative;top: 0;}
       body{
           background-image: url('https://scontent-hbe1-1.xx.fbcdn.net/v/t1.0-9/87893478_10158200951064577_3742560181620310016_o.jpg?_nc_cat=103&_nc_sid=e3f864&_nc_eui2=AeFHS7teCXLBqSEmdcAoxZWpaX8p31SMloVpfynfVIyWhV58Uj28u258cuQyRShAf8_0ln3g05He-iyVnsG2We1C&_nc_ohc=U94llkn9RU8AX9rLlnI&_nc_ht=scontent-hbe1-1.xx&oh=77209de6414f3136fd19ef3db93505d1&oe=5F9A3B22');
           background-size: cover;
           background-repeat: no-repeat;
       }
       .d-inline-block{
           width: 180;
           padding: 0;
           margin: 0;
           position: relative;
           top: -3pc;
       }
       .container{
           padding-right: 0;
           padding-left: 0;
           margin-right: 0;
           margin-left: 0;
       }
    #nameartist{position: relative; left:72.4%;font-size: 26px;font-weight: 900;color: #b0a43d;top:6.3pc; text-align: right;}
    #namesong{position: absolute;left:25%;top: 7.9pc;font-size: 26px;font-weight: 900;color: #b0a43d;text-align: right;}
    #imgalbum{width: 150px;height: 150px;border-radius: 50%;position: absolute;top: 1pc;left: 41pc;transition: all 0.6s ease-in-out;}
    #imgalbum:hover{top: 0;transform: rotate(360deg);}
    #lyrics{color: white;background-color: rgb(0,0,0,0.3);position: relative;left: 365;width: 48.6pc;word-spacing: 10.6px;top: -41; border-radius: 25px 24px 25px 25px; padding: 39px 20px 0px;}
    #audio{width: 48pc;position: relative; left: 4pc;z-index: 2;top: 11.1pc;}

  



      .box {
        width: 40%;
        margin: 0 auto;
        background: rgba(255,255,255,0.2);
        padding: 35px;
        border: 2px solid #fff;
        border-radius: 20px/50px;
        background-clip: padding-box;
        text-align: center;z-index: 4;
      }

      .button {
        font-size: 1em;
        padding: 10px;
        color: #fff;
        border: 2px solid #06D85F;
        border-radius: 20px/50px;
        text-decoration: none;
        cursor: pointer;
        transition: all 0.3s ease-out;z-index: 4;
      }
      .button:hover {
        background: #06D85F;z-index: 4;
      }

      .overlay {
        position: fixed;z-index: 4;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.7);
        transition: opacity 500ms;
        visibility: hidden;
        opacity: 0;
      }
      .overlay:target {
        visibility: visible;z-index: 4;
        opacity: 1;
      }

      .popup {
        margin: 70px auto;z-index: 4;
        padding: 20px;
        background: #fff;
        border-radius: 5px;
        width: 30%;
        position: relative;
        transition: all 5s ease-in-out;
      }

      .popup h2 {
        margin-top: 0;z-index: 4;
        color: #333;
        font-family: Tahoma, Arial, sans-serif;
      }
      .popup .close {
        position: absolute;
        top: 20px;z-index: 4;
        right: 30px;
        transition: all 200ms;
        font-size: 30px;
        font-weight: bold;
        text-decoration: none;
        color: #333;
      }
      .popup .close:hover {
        color: #06D85F;z-index: 4;
      }
      .popup .content {
        max-height: 30%;z-index: 4;
        overflow: auto;
      }

      @media screen and (max-width: 700px){
        .box{
          width: 70%;z-index: 4;
        }
        .popup{
          width: 70%;z-index: 4;
        }
      }
   </style>
  <head>  
  <body>
      
      <!--logo-->
    <div class="container" >
        <!--logo-->
        <a class="navbar-brand" href="home.html">
          <img src="1.png"class="d-inline-block align-top" alt="Ranmusic" loading="lazy">
        </a>

            <span id="nameartist">عمرو دياب</span>
            <span id="namesong">namesong</span>
            <img id="imgalbum" src="https://scontent-hbe1-1.xx.fbcdn.net/v/t1.0-9/87893478_10158200951064577_3742560181620310016_o.jpg?_nc_cat=103&_nc_sid=e3f864&_nc_eui2=AeFHS7teCXLBqSEmdcAoxZWpaX8p31SMloVpfynfVIyWhV58Uj28u258cuQyRShAf8_0ln3g05He-iyVnsG2We1C&_nc_ohc=U94llkn9RU8AX9rLlnI&_nc_ht=scontent-hbe1-1.xx&oh=77209de6414f3136fd19ef3db93505d1&oe=5F9A3B22" alt="imgalbum">
            <audio id='audio' src='https://cdn1.esm3.com/music/6854/esm3.com.185748.mp3' controls  controlslist='nodownload'></audio>
            <div id="lyrics">lyrics</div>
            <div id="random" style="color: white;"></div>
            <button onclick="next();">random</button>
            <button onclick="location.reload();">reload(++)</button>
            <div id="pre" style="color: white;"></div>
            <form method="GET" action="album1.php"name="loginform">
            <button name="dec">--</button>
            </form>
            <form method="GET" action="album1.php"name="loginform">
            <button name="next">--next</button>
            </form>
    </div>   




<form method="POST" action="album1.php"name="loginform">
            <button name="pre">pre</button>                                           <!-- pre button -->
            </form>
            <form method="GET" action=""name="loginform">
            <button name="pree">pree</button>                                           <!-- pre button -->
            </form>
            <div id="div" style="color: white;"> </div>
   <script>
     var stack=[];
     stack.push(" <?php echo $random;?>");
     stack.push(" <?php echo $random;?>");
     stack.push(" <?php echo $random;?>");

     document.getElementById("div").innerHTML=stack.toString();
   </script>         
   </body>
</html>