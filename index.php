<?php

require_once("assets/divscan/scan.php");
$slider_img_dirs = array('assets/img/gallery/');
$img_file_ext = array(
    "jpg",
    "bmp",
    "png",
    "gif",
    "tiff",
    "mp4",
    "mov"
);
$slider_img_files = scanDir::scan($slider_img_dirs, $img_file_ext);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="referrer" content="strict-origin" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/fonts/css/all.css">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <title>Home | WAFClan</title>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-dark nav">
    <div class="container">
        <a class="navbar-brand logo-text" href="#"><h3><strong>WAFClan</strong></h3></a>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="#about"><i class="fad fa-address-card"></i> <strong>ABOUT US</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#team"><i class="fad fa-user-friends"></i> <strong>TEAM</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#calender"><i class="fad fa-calendar-week"></i> <strong>KALENDER</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#galerie"><i class="fad fa-images"></i> <strong>GALERIE</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://clanwaf.de/webinterface/"><i class="fad fa-sign-in-alt"></i> <strong>LOGIN</strong></a>
            </li>
        </ul>
    </div>
</nav>
<!-- Navbar -->

<!-- Background -->
<img src="assets/img/bg.png" alt="bg" class="bg">
<!-- Background -->

<!-- Logo Text -->
<div class="logotext">WAF CLAN</div>
<!-- Logo Text -->

<!-- Wave -->
<svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#2C2F33" fill-opacity="1" d="M0,64L60,69.3C120,75,240,85,360,96C480,107,600,117,720,138.7C840,160,960,192,1080,197.3C1200,203,1320,181,1380,170.7L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
<!-- Wave -->

<!-- About Us -->
<div id="about">
    <div class="about-header">Über uns</div>
    <div class="about-text">Das ist der About Us Text den dann Irgendwer schreibt, weil ich keine Lust haben ihn zu schreiben</div>
</div>
<!-- About Us -->

<!-- Team -->
<div class="main-container"  style="text-align: center; color: white; margin-top: 8%" id="team">
    <div class="container team-color">
        <h1 style="font-weight:800; color: #AC0011;">WAFClan Team</h1>
        <br>
        <div class="row text-center">

            <!-- Team Natsu -->
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="card-header"><div style="color: #000000;"><h5 class="mb-0">WAF_Natsu</h5><strong class="small text-uppercase">Clan Leader/Clan Kassen verwalter</strong></div></div>
                <div class="bg-darker rounded shadow-sm py-5 px-4 card-pic"><img src="assets/img/Waf_Natsu.png" alt="" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"></div>
            </div>
            <!-- Ende -->

            <!-- Team Heavy -->
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="card-header"><div style="color: #000000;"><h5 class="mb-0">WAF_HeavyMettAal</h5><strong class="small text-uppercase">Clan Leader/Clan Opa</strong></div></div>
                <div class="bg-darker rounded shadow-sm py-5 px-4 card-pic"><img src="assets/img/Waf_heavyMettAal.png" alt="" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"></div>
            </div>
            <!-- Ende -->

            <!-- Team Jumpy -->
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="card-header"><div style="color: #000000;"><h5 class="mb-0">WAF_Jumpy1007</h5><strong class="small text-uppercase">Clan Leader/Clan Maskottchen</strong></div></div>
                <div class="bg-darker rounded shadow-sm py-5 px-4 card-pic"><img src="assets/img/WAF_Jumpy1007.png" alt="" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"></div>
            </div>
            <!-- Ende -->

            <!-- Team Raven -->
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="card-header"><div style="color: #000000;"><h5 class="mb-0">Holy_Raven</h5><strong class="small text-uppercase">WAF/Plot Mutti</strong></div></div>
                <div class="bg-darker rounded shadow-sm py-5 px-4 card-pic"><img src="assets/img/Holy_Raven.png" alt="" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"></div>
            </div>
            <!-- Ende -->

            <!-- Team Äffchen -->
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="card-header"><div style="color: #000000;"><h5 class="mb-0">KackAeffchen</h5><strong class="small text-uppercase">WAF/Meister Builder</strong></div></div>
                <div class="bg-darker rounded shadow-sm py-5 px-4 card-pic"><img src="assets/img/KackAeffchen.png" alt="" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"></div>
            </div>
            <!-- Ende -->

            <!-- Team Colin -->
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="card-header"><div style="color: #000000;"><h5 class="mb-0">WAF_Colin</h5><strong class="small text-uppercase">WAF/Co Chef</strong></div></div>
                <div class="bg-darker rounded shadow-sm py-5 px-4 card-pic"><img src="assets/img/WAF_Colin.png" alt="" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"></div>
            </div>
            <!-- Ende -->

            <!-- Team Balu -->
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="card-header"><div style="color: #000000;"><h5 class="mb-0">Balu04</h5><strong class="small text-uppercase">WAF/Clan Psychopath</strong></div></div>
                <div class="bg-darker rounded shadow-sm py-5 px-4 card-pic"><img src="assets/img/Balu04.png" alt="" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"></div>
            </div>
            <!-- Ende -->

            <!-- Team xRyuken -->
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="card-header"><div style="color: #000000;"><h5 class="mb-0">xRyuken</h5><strong class="small text-uppercase">WAF/Streamer</strong></div></div>
                <div class="bg-darker rounded shadow-sm py-5 px-4 card-pic"><img src="assets/img/xRyuken.png" alt="" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"></div>
            </div>
            <!-- Ende -->

            <!-- Team Perplex -->
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="card-header"><div style="color: #000000;"><h5 class="mb-0">Santa_Perplex</h5><strong class="small text-uppercase">WAF/Clan Tröte</strong></div></div>
                <div class="bg-darker rounded shadow-sm py-5 px-4 card-pic"><img src="assets/img/Santa_Perplex.png" alt="" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"></div>
            </div>
            <!-- Ende -->

            <!-- Team ChaosSchwein -->
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="card-header"><div style="color: #000000;"><h5 class="mb-0">ChaosSchwein</h5><strong class="small text-uppercase">WAF/Developer</strong></div></div>
                <div class="bg-darker rounded shadow-sm py-5 px-4 card-pic"><img src="assets/img/Progammierer.png" alt="" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"></div>
            </div>
            <!-- Ende -->

            <!-- Team Erik05Master -->
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="card-header"><div style="color: #000000;"><h5 class="mb-0">Erik05Master</h5><strong class="small text-uppercase">WAF/Webseiten Verwalter</strong></div></div>
                <div class="bg-darker rounded shadow-sm py-5 px-4 card-pic"><img src="assets/img/Erik05Master.png" alt="" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"></div>
            </div>
            <!-- Ende -->

            <!-- Team WAF_Nemo -->
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="card-header"><div style="color: #000000;"><h5 class="mb-0">Waf_Nemo</h5><strong class="small text-uppercase">WAF/Clanschreiber</strong></div></div>
                <div class="bg-darker rounded shadow-sm py-5 px-4 card-pic"><img src="assets/img/WAF_Nemo.png" alt="" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"></div>
            </div>
            <!-- Ende -->


        </div>
    </div>
</div>
<!-- Team -->

<!-- Kalender -->
<div id="calender">
    <div class="ca-header">Kalender</div>
    <iframe class="calender" src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=2&amp;bgcolor=%232c2f33&amp;ctz=Europe%2FBerlin&amp;title=Kalender&amp;showTz=0&amp;showCalendars=0&amp;showPrint=0&amp;showDate=0&amp;showNav=0&amp;showTitle=0&amp;showTabs=0" style="border-width:0" width="1200" height="600" frameborder="0" scrolling="no"></iframe>
</div>
<!-- Kalender -->
<br>
<!-- Gallery -->
<div id="galerie"></div>
    <div class="ga-header">Galerie</div>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php

        for($i=0; $i<count($slider_img_files); $i++){
            if($i==0){
                echo('<div class="carousel-item active">
                        <img src="'.$slider_img_files[$i].'" style="width: 100%; height: 700px;">
                    </div>');
            }else{
                echo('<div class="carousel-item">
                           <img src="'.$slider_img_files[$i].'" style="width: 100%; height: 700px;">
                     </div>');
            }
        }

        ?>
    </div>
    <button class="carousel-control-prev" type="button" style="background: none !important; border: 0px !important" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" style="background: none !important; border: 0px !important" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden" >Next</span>
    </button>
</div>
<!-- Gallery -->
<br>
<!-- Footer -->
<div class="footer">
    <br>
    <p>Copyright &copy 2020-<script>document.write(new Date().getFullYear())</script> <a href="https://clanwaf.de">ClanWAF.de</a> All Rights Reserved.</p>
    <div class="made">Made By <a href="https://NoSync.xyz">NoSync.xyz</a> <red><i class="fas fa-heart"></i></red></div>
</div>
<!-- Footer -->

</body>
</html>