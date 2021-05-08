<?php
require('../../dbconfig.php');



if(empty($_GET['name'])){
    header("Location : index.php");
}
if(isset($_POST['logi']))
{
if(empty($_POST['LastOnlin'])||empty($_POST['Verwarnun'])||empty($_POST['VerwarnungsDaue'])||empty($_POST['Beschreibun'])){
  ?> <script "text/javascript">
  alert("Du hast nicht alles eingegeben!");

</script> <?php
}else{
  $name = $_GET['name'];
  $lastons=$_POST['LastOnlin'];
  $Verwarnuns=$_POST['Verwarnun'];
  $VerwarnungsDaues=$_POST['VerwarnungsDaue'];
  $Beschreibuns=$_POST['Beschreibun'];
  mysqli_query($link,"UPDATE `teamverwaltung` SET `LastOnline`='".$lastol."',`Verwarnung`='".$Verwarnuns."',`VerwarnungsDauer`='".$VerwarnungsDaues."',`Bemerkung`='".$Beschreibuns."' WHERE `Username` = '".$name."'") or die("Die");
    header("Location : index.php");
}
}
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
    <style>
    *{
      margin: 0;
      padding: 0;
      text-decoration: none;
      font-family: montserrat;
      box-sizing: border-box;
    }

    body{
      min-height: 100vh;
      background-image: linear-gradient(120deg,#2d3436,#0a3d62);
    }


    .login-form{
      width: 360px;
      background: #f1f1f1;
      height: 580px;
      padding: 80px 40px;
      border-radius: 10px;
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%,-50%);
      animation: 5s rgb infinite;
    }

    .login-form h1{
      text-align: center;
      margin-bottom: 60px;
    }

    .txtb{
      border-bottom: 2px solid #adadad;
      position: relative;
      margin: 30px 0;
    }

    .txtb input{
      font-size: 15px;
      color: #333;
      border: none;
      width: 100%;
      outline: none;
      background: none;
      padding: 0 1px;
      height: 20px;
    }

    .txtb span::before{
      content: attr(data-placeholder);
      position: absolute;
      top: 50%;
      left: 5px;
      color: #adadad;
      transform: translateY(-50%);
      z-index: -1;
      transition: .5s;
    }

    .txtb span::after{
      content: '';
      position: absolute;
      color: #636e72;
      width: 0%;
      height: 2px;
      transition: .5s;
    }

    .focus + span::before{
      top: -5px;
    }
    .focus + span::after{
      width: 100%;
    }

    .logbtn{
      display: block;
      width: 100%;
      height: 50px;
      border: none;
      background: linear-gradient(120deg,#0a3d62,#2d3436,#0652DD);
      background-size: 200%;
      color: #fff;
      outline: none;
      cursor: pointer;
      transition: .5s;
    }

    .logbtn:hover{
      background-position: right;
    }

    </style>
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
      <h1>Teammangagment von ClanWAF</h1>
      <br>
      <h2>Accounts</h2>
      <br><br><br><br><br>
  <div class="pricing-table">
        <?php
        $name = $_GET['name'];

        echo '
          <div class="col">

            <div class="table">
            <img src="https://minotar.net/helm/'.$name.'/125.png" width="125" height="125" alt="User '.$name.'">
                  <form action="anderninfo.php?name='.$name.'" method="POST">
            <ul>

              <li> </li>
              <li>Username : <br /><strong>'.$name.'</strong></li>
              <li><strong>Daten Ändern:</strong></li>
              <li>LastOnline</li>
                    <div class="txtb">
              <li><input type="date" name="LastOnlin"></li>
              </div>
                <li>Verwarnung</li>
                    <div class="txtb">
              <li><input type="text" name="Verwarnun"></li>
                    </div>
              <li>VerwarnungsDauer</li>
                  <div class="txtb">
              <li><input type="date" name="VerwarnungsDaue"></li>
                    </div>
                      <li>Beschreibung</li>
                          <div class="txtb">
              <li><input type="text" name="Beschreibun"></li>
                    </div>
              <li>  <input type="submit" class="logbtn" name ="logi" value="Hinzufügen"></li>
              <li></li>
            </ul>
            </form>

          </div>

        </div>';


        ?>
      </div>








    </center>
  </div>

</body>
</html>
