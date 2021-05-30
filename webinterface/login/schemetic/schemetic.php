<?php
session_start();
require('../../../assets/api/mysql/mysql_connetion.php');

if(isset($_POST['logi']))
{
    if(!isset($_POST['datei']))
    {

        ?> <script "text/javascript">
        alert("Du hast nicht alles eingegeben!");

        </script> <?php

    }else{
        $upload_folder = 'upload/';
        $filename = pathinfo($_FILES['datei']['name'], PATHINFO_FILENAME);
        $extension = strtolower(pathinfo($_FILES['datei']['name'], PATHINFO_EXTENSION));
 
 
//Überprüfung der Dateiendung
        $allowed_extensions = array('schematic','litematic','nbt','schem');
        if(!in_array($extension, $allowed_extensions)) {
        ?>    <script "text/javascript"> alert("Ungültige Dateiendung. Nur schematic, litematic, nbt und schem-Dateien sind erlaubt");</script><?php
        }else{
            if($_POST['server16']){    $upload_folder= "/home/minecraft/waf/CloudNet-Wrapper/local/servers/unity/unity-2/plugins/WorldEdit/schematics/";

            }else{
                $upload_folder= "/home/minecraft/waf/CloudNet-Wrapper/local/servers/unity/unity-1/plugins/FastAsyncWorldEdit/schematics/";
            }
            $new_path = $upload_folder.$filename.'.'.$extension;
 
            
            if(file_exists($new_path)) {
             $id = 1;
             do {
             $new_path = $upload_folder.$filename.'_'.$id.'.'.$extension;
             $id++;
             } while(file_exists($new_path));
            }
             
     
            move_uploaded_file($_FILES['datei']['tmp_name'], $new_path);

       $db_res = mysql_connetion::result("SELECT * FROM `SchemeticCount`");
        $row = mysqli_fetch_array($db_res);
        $anzahl = intval($row["count"])+1;
            mysql_connetion::query("UPDATE `SchemeticCount` SET `count`='".$anzahl."' ");
   
        ?> <script "text/javascript"> alert("Du hast die Datei hochgeladen!");</script> <?php
    }
    //self.close();
    //top.close();


   // }

}
}
?>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>ClanWAF.de Teammangagment</title>
    <link rel="shortcut icon" type="image/png" href="/img/logo.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>
<script type="text/javascript" color="200, 0, 0" opacity="1.6" zindex="-2" count="150" src="http://www.cssscript.com/demo/interactive-particle-nest-system-with-javascript-and-canvas-canvas-nest-js/canvas-nest.js"></script><canvas id="c_n2" width="725" height="913" style="position: fixed; top: 0px; left: 0px; z-index: -2; opacity: 0.7;"></canvas>

<form action="schemetic.php" method="POST" class="login-form" enctype="multipart/form-data">
    <h1>Hochladen</h1>

    <label class="switch" name="1.16 Server">
        <input type="checkbox" checked="checked" name="server16">
        <span class="slider round"></span>
    </label>
    <h3>1.16 Server</h3>
<br>
    <label class="switch" name="1.12 Server">
        <input type="checkbox" name="server12">
        <span class="slider round"></span>
    </label>
    <h3>1.12 Server</h3>
    <br>
    <br>
    <input type="file" accept=".schematic,.litematic,.nbt,.schem" name ="datei" value="Schemetic">

    <br>
    <br> <br>
    <br>

    <input type="submit" class="logbtn" name ="logi" value="Hochladen">



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
