<?php
session_start();
require('../../dbconfig.php');

if($_SESSION['eingang']==0){
  header("Location : ../../index.php");
}else{

if(empty($_GET['name'])){
  header("../index.php");
}else{
$name = $_GET['name'];
if($name == "root"){
?>
<script >
alert("Den User kann man nicht Löschen!");
</script>
<?php
header("Location: index.php");
}else{
mysqli_query($link,"DELETE FROM `teamlogin` WHERE `User` = '".$name."'") or die("Die");
?>
<script text="text/javascript">
alert("Du hast den User gelöscht!");
</script>
<?php
header("Location: index.php");
}
}
}
?>
