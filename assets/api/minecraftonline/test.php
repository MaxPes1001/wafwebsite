<?php
require("serverminecraft.php");
echo("<p>Version ".serverminecraft::getVersion(false)."</p>");
echo("<p>Protocol ".serverminecraft::getVersion(true)."</p>");
echo("<p>Online Player ".serverminecraft::getPlayers(false)."</p>");
echo("<p>Max Player ".serverminecraft::getPlayers(true)."</p>");
echo("<p>Modt ".serverminecraft::getDescription(true)."</p>");
echo('<img class="bd-placeholder-img rounded-circle" width="140" height="140" src="'.serverminecraft::getIcon().'"</img>');

?>