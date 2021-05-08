<?php
require('dbconfig.php');
$na = 0;
$db_res = mysqli_query($link,"SELECT `PW` FROM `TeamLogin`") or ($na = 1);

if ($na == 1) {

 mysqli_query($link,"CREATE TABLE IF NOT EXISTS TeamLogin (User VARCHAR(100), PW VARCHAR(100), Rang VARCHAR(100))") or die("<center><h1>Es ging nicht</h1>");
 mysqli_query($link,"CREATE TABLE IF NOT EXISTS SchemeticCount (count VARCHAR(100))") or die("<center><h1>Es ging nicht</h1>");
//mysqli_query($link,"CREATE TABLE IF NOT EXISTS TeamVerwaltung ( Username VARCHAR(100) NOT NULL , Rang VARCHAR(100) NOT NULL , LastOnline DATE NOT NULL , Verwarnung VARCHAR(100) NOT NULL , VerwarnungsDauer DATE NOT NULL , Bemerkung VARCHAR(200) NOT NULL ) ENGINE = InnoDB");
 $pwmd = md5('M3gcz951t41991!!!');
 mysqli_query($link,"INSERT INTO `TeamLogin`(`User`, `PW`,`Rang`) VALUES ('root','".$pwmd."','1')");
 mysqli_query($link,"INSERT INTO `schemeticcount`(`count`) VALUES ('0')");
}
//15Fluffi15

header('Location: index.php');
?>
  