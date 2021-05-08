<?php session_start();
require('../dbconfig.php');

if($_SESSION['eingang']==0){
  header("Location : ../index.php");
}else

?>
<html>
<head>

    <meta charset="utf-8">
    <title>ClanWAF.de Webinterface</title>
    <link rel="shortcut icon" type="image/png" href="/img/logo.png">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
      <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <script>
  function openSlideMenu(){
    document.getElementById('menu').style.width = '250px';
    document.getElementById('content').style.marginLeft = '250px';
  }
  function closeSlideMenu(){
    document.getElementById('menu').style.width = '0';
    document.getElementById('content').style.marginLeft = '0';
  }
</script>
</head>
<body>
  <script type="text/javascript" color="200, 0, 0" opacity="1.6" zindex="-2" count="150" src="http://www.cssscript.com/demo/interactive-particle-nest-system-with-javascript-and-canvas-canvas-nest-js/canvas-nest.js"></script><canvas id="c_n2" width="725" height="913" style="position: fixed; top: 0px; left: 0px; z-index: -2; opacity: 0.7;"></canvas>
    <div id="content">

    <span class="slide">
      <a onclick="openSlideMenu()">
        <i class="fas fa-bars"></i>
      </a>
    </span>

    <div id="menu" class="nav">
      <a class="close" onclick="closeSlideMenu()">
        <i class="fas fa-times"></i>
      </a>
      <a href="#">Home</a>
      <a href="#"onclick="pwandern()">Password Ändern</a>
        <?php

        if(!empty($_SESSION['rang'])) {
            $rang1 = $_SESSION['rang'];
            if ($rang1 == "1") {
                echo '<a href="teammangagment/index.php">Team</a>';
            }
        }
        ?>


      </div>
    <div class="inter">
    <center>
      <h1>Webinterface von ClanWAF</h1>
      <br><br>
      <div class="middle">
    <div class="counting-sec">
      <div class="inner-width">
        <div class="col">
          <img src="../img/map.png" width="550" height="250"  alt="Maps hochgeladen" />
          <?php
          $db_res = mysqli_query($link,"SELECT `count` FROM `SchemeticCount` ") or die("<center><h2>0 <br> Server </h2>");
          $row = mysqli_fetch_array($db_res);
          $pwresold = intval($row["count"]);
          echo '<h2 class="num">'.$pwresold.'</h2>';

          ?>
          <h2>Schemetics hochgeladen</h2>
        </div>
      </div>
        <a class="logbtn" onclick="Register()">Schemetic hochladen</a>
    </div>
  </div>

        <script language="JavaScript">

            function Register()
            {
                var breite=screen.availWidth;
                var hoehe=screen.availHeight;
                var positionX=((screen.availWidth / 2) - breite / 2);
                var positionY=((screen.availHeight / 2) - hoehe / 2);
                var url='schemetic/schemetic.php';
                pop=window.open('','User Register','toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=0,resizable=0,fullscreen=0,width='+breite+',height='+hoehe+',top=10000,left=10000');
                pop.blur();
                pop.resizeTo(breite,hoehe);
                pop.moveTo(positionX,positionY);
                pop.location=url;
            }
            onerror = stopError;
            function stopError()
            {return true;}
            function pwandern()
            {
                var breite=screen.availWidth;
                var hoehe=screen.availHeight;
                var positionX=((screen.availWidth / 2) - breite / 2);
                var positionY=((screen.availHeight / 2) - hoehe / 2);
                var url='pwandern.php';
                pop=window.open('','User Register','toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=0,resizable=0,fullscreen=0,width='+breite+',height='+hoehe+',top=10000,left=10000');
                pop.blur();
                pop.resizeTo(breite,hoehe);
                pop.moveTo(positionX,positionY);
                pop.location=url;
            }

        </script>
  <script type="text/javascript">
    $(".num").counterUp({delay:10,time:1000});
  </script>
    </center>
  </div>

</body>
</html>
