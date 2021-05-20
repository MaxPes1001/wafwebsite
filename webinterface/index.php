<?php
session_start();
require('dbconfig.php');

if(isset($_POST['logi']))
{
  if(empty($_POST['usernam'])||empty($_POST['Passord']))
  {

      ?> <script "text/javascript">
      alert("Du hast nicht alles eingegeben!");

    </script> <?php

  }else{
    $usern = $_POST['usernam'];
      $_SESSION['eingang']=1;
      $_SESSION['rang']=1;
      $_SESSION['usern']=$usern;
$db_res = mysqli_query($link,"SELECT * FROM `TeamLogin` WHERE `User` = '".$usern."'") or die("<center><h1>Du hast das falsche Password eingegeben!</h1>");
$row = mysqli_fetch_array($db_res);
$pwresold = $row["PW"];

    if(md5($_POST['Passord']) == $pwresold){
  session_start();
  $_SESSION['eingang']=1;
  $_SESSION['rang']=$row["Rang"];
  $_SESSION['usern']=$usern;
  ?>
    <script "text/javascript">
  alert("Du bist Jetzt eingelogt!");

  </script>
  <?php


  header('Location: login/index.php');
  }else{
  ?> <script "text/javascript">
  alert("Du hast das falsche Passwort eingegeben!");

</script> <?php
  }
}
}

?>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ClanWAF Teamwebsite</title>
    <link rel="shortcut icon" type="image/png" href="/img/logo.png">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>
    <script type="text/javascript" color="200, 0, 0" opacity="1.6" zindex="-2" count="150" src="http://www.cssscript.com/demo/interactive-particle-nest-system-with-javascript-and-canvas-canvas-nest-js/canvas-nest.js"></script><canvas id="c_n2" width="725" height="913" style="position: fixed; top: 0px; left: 0px; z-index: -2; opacity: 0.7;"></canvas>

      <form action="index.php" method="POST" class="login-form">
        <h1>Login</h1>

        <div class="txtb">
          <input type="text" name="usernam" required>
          <span data-placeholder="Username" ></span>
        </div>

        <div class="txtb">
          <input type="password" name="Passord" required>
          <span data-placeholder="Password"></span>
        </div>

        <input type="submit" class="logbtn" name ="logi" value="Login">



      </form>

      <script type="text/javascript">
      $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });

      </script>


  </body>
</html>
