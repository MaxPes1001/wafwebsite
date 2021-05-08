<?php session_start();
require('../../dbconfig.php');

if($_SESSION['eingang']==0){
  header("Location : ../../index.php");
}else

?>
<html>
<head>

    <meta charset="utf-8">
    <title>ClanWAF.de Teammangagment</title>
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
  function openregisterclick(){
    document.getElementById('register').style.width = '40%';
    document.getElementById('register').style.height = '40%';
  }
</script>
<script language="JavaScript">

function Register()
{
 var breite=screen.availWidth;
 var hoehe=screen.availHeight;
 var positionX=((screen.availWidth / 2) - breite / 2);
 var positionY=((screen.availHeight / 2) - hoehe / 2);
 var url='register.php';
 pop=window.open('','User Register','toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=0,resizable=0,fullscreen=0,width='+breite+',height='+hoehe+',top=10000,left=10000');
 pop.blur();
 pop.resizeTo(breite,hoehe);
 pop.moveTo(positionX,positionY);
 pop.location=url;
 }
onerror = stopError;
function stopError()
{return true;}

</script>
</head>
<body>
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
      <a href="../index.php">Home</a>
      <a href="index.php">Team</a>
      </div>
    <div class="inter">
      <script type="text/javascript" color="76, 209, 55" opacity="1.4" zindex="-2" count="100" src="http://www.cssscript.com/demo/interactive-particle-nest-system-with-javascript-and-canvas-canvas-nest-js/canvas-nest.js"></script><canvas id="c_n2" width="725" height="913" style="position: fixed; top: 0px; left: 0px; z-index: -2; opacity: 0.7;"></canvas>

    <center>
      <h1>Webinterface von ClanWAF</h1>
      <br>
      <h2>Accounts</h2>
      <br><br><br><br><br>
  <div class="pricing-table">
        <?php
        $db_tab = mysqli_query($link,"SELECT * FROM `TeamLogin` ") or die('<img src="../img/usericon.png" width="125" height="125" alt="User">');
      	while($row = mysqli_fetch_array($db_tab)){
            $Userresold = $row["User"];
            $db_tab1 = mysqli_query($link,"SELECT * FROM `TeamLogin` WHERE `User` = '".$Userresold."'");
              	while($row1 = mysqli_fetch_array($db_tab1)){
              $Rangresold = $row1["Rang"];
              if($Rangresold=="1"){
                  $rang = "Admin";
              }else{
                  $rang = "Wuffel";
              }


        echo '
          <div class="col">

            <div class="table">
            <img src="https://minotar.net/helm/'.$Userresold.'/125.png" width="125" height="125" alt="User '.$Userresold.'">

            <ul>

              <li> </li>
              <li>Username : <br /><strong>'.$Userresold.'</strong></li>
              <li>Rang : <br /><strong>'.$rang.'</strong></li>
             
              <li></li>

            </ul>
            <a href="usercheck.php?name='.$Userresold.'">INFO</a>
          </div>

        </div>';
      }
      }
        ?>
      </div>
        <div class="footer">

        <div class="footerregister">
          <a href="" onclick="Register()"><img src="../../img/plus.png" width="30" height="30" alt="User hinzufügen"><br>User Hinzufügen</a>
        </div>
  </div>







    </center>
  </div>

</body>
</html>
