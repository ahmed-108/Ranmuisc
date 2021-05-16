<?php 
 session_start();
?>
<html>
    <head>
      <title>RanMusic</title>
      <meta charset="utf-8">
      <meta name="RanMusic" content="Join us and Enjoy The Music">
     <link rel="stylesheet" type="text/css" href="bootstrap.css">
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <style>
         body{
             background-image: url(back.jpg.jpg);
             background-size: cover;
             background-repeat:no-repeat;
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





.container1{
  max-width:1000px;
  display:flex;
  flex-wrap:wrap;
  justify-content:space-around;
  left: 14.4pc;
  bottom:3pc ;
  position: relative;
}

.card{
  position:relative;
  margin:20px 0;
  width:300px;
  height:400px;
  background: #fff;
  transform-style:preserve-3d;
  transform:perspective(2000px);
  transition:1s;
  box-shadow:inset 100px 0 50px rgba(0,0,0,0.5);
}

.card:hover{
  z-index:1111;
  transform:perspective(2000px) rotate(-10deg);
  box-shadow:inset 20px 0 50px rgba(0,0,0,0.5);
}

.card .img-container{
  position:relative;
  width:100%;
  height:100%;
  border:1px solid #000;
  box-sizing:border-box;
  transform-origin:left;
  z-index:1;
  transition:1s;
}

.card .img-container img{
  position:absolute;
  left:0;
  top:0;
  height:100%;
  width:100%;
  object-fit:cover;
}

.card:hover .img-container{
  transform:rotateY(-135deg);
}

.card .card-details{
  position:absolute;
  left:0;
  top:0;
  box-sizing:border-box;
  padding:20px;
  color:#000;
}

 .card .card-details h2{
  margin:0;
  padding:0.5em 0;
  text-transform:uppercase;
  font-size:2em;
  color:#ed363a;
}

.card .card-details p{
  margin:0;
  padding:0;
  line-height:25px;
  font-size:1.1em;
}

nav{margin: 35px 0;background-color: transparent;width: 12.5pc;color: white;float: right; left: 82.5pc;position: absolute; bottom: 40.1pc;z-index: 3;}
        #picuser{width: 50px;z-index: 3;}
        nav ul {padding: 0;margin: 0;list-style: none; position: relative;z-index: 3;}
        nav ul li {display:inline-block;background-color: transparent;z-index: 3;}
        nav a {display:block;padding:0 10px;color:#FFF;font-size:20px;line-height: 60px;text-decoration:none;z-index: 3;}
        nav a:hover {background-color: #333;width: 12.5pc;text-decoration: none;color: white;z-index: 3;}
        nav ul ul {display: none;position: absolute;top: 60px;z-index: 3;}
        nav ul li:hover > ul {display:inherit;z-index: 3;}
        nav ul ul li { width:200px;float:none;display:list-item;position: relative;z-index: 3;}
        nav ul ul ul li {position: relative;top:-60px;left:200px;z-index: 3;}
        nav ul ul li {border: 1px solid white;z-index: 3;}
        li > a:after { content:  ' ▼';z-index: 3; }
        li > a:only-child:after { content: '';z-index: 3; }    
     </style>
    <head>  
    <body> 
      <div class="container" >
          <!--logo-->
          <a class="navbar-brand" href="home1.php">
            <img src="1.png"class="d-inline-block align-top" alt="Ranmusic" loading="lazy">
          </a>
          
          <div class="container1">
 <div class="card">
 <div class="img-container">
      <img src="https://d2ajy4iry6zk4j.cloudfront.net/pubvat/thumbnail/large/fkmrdudsu" alt=""/>
    </div>
   <a href="album1.php"> <div class="card-details">
      <h2>عمرو دياب</h2>
      <p> .عدد البومات عمرو دياب 33 البوم  <br> .عدد الاغاني 370 اغنية </p>
    </div></a>
  </div>
   <div class="card">
    <div class="img-container">
      <img src="https://etbilarabi.com/sites/default/files/styles/article_landing/public/2019-09/37708853_487741711639542_7687391070656659456_n.jpg?itok=el5Fh06w" alt=""/>
    </div>
    <div class="card-details">
      <h2>محمد حماقي</h2>
      <p>.عدد البومات حماقي 8البومات <br> .عدد الاغاني 108 اغنية</p>
    </div>
  </div>
   <div class="card">
    <div class="img-container">
      <img src="https://moseeqa.net/wp-content/uploads/2020/04/%D8%B1%D8%A7%D9%85%D9%8A-%D8%B5%D8%A8%D8%B1%D9%8A.jpg" alt=""/>
    </div>
    <div class="card-details">
      <h2>رامي صبري</h2>
      <p>.عدد البومات رامي صبري 6 البومات <br> .عدد الاغاني 89 اغنية</p>

    </div>
  </div>
   <div class="card">
    <div class="img-container">
     <img src="https://nn.ps/media/uploads/weblog/2019/11/14/artworks-000586338680-z20mg3-t500x500.jpg" alt=""/>
    </div>
    <div class="card-details">
      <h2>تامر عاشور</h2>
      <p>.عدد البومات تامر عاشور 6 البومات <br> .عدد الاغاني 97 اغنية</p></div>

  </div>
   <div class="card">
    <div class="img-container">
      <img src="https://www.pal24.net/cached_uploads/resize/860/487/n/pal24_images/pal24_images/6482451-2103394376-jpg-04736173405014828.jpg" alt=""/>
    </div>
    <div class="card-details">
      <h2>تامر حسني</h2>
      <p>.عدد البومات تامر حسني 15 البوم <br> .عدد الاغاني 200 اغنية</p></div>
    </div>
    <div class="card">
    <div class="img-container">
      <img src="https://www.aghanyna.net/arabic/wp-content/uploads/2017/05/sherin_398.jpg" alt=""/>
    </div>
    <div class="card-details">
      <h2>شيرين</h2>
      <p>.عدد البومات شيرين 7 البومات <br> .عدد الاغاني 107 اغنية</p></div>
    </div>
  </div>
   

  </div>
  <nav>
        <ul>
            <li><a href="#"> <img id="picuser" src="https://img.icons8.com/bubbles/200/000000/user-male.png"/><?php echo ($_SESSION['user']);?></a>
        <ul>
                <li><a href="changepassword.php" target="_blank">change password</a></li>
                <li><a href="logout.php">Logout</a>    </li>
            </ul>  
        </ul>      
            </li>           
    </nav>
  </div>
  
    </body>
  </html>