<?php
require(__DIR__ . "/../config/db_config.php");

class mysql_connetion
{
    private static $link = null;
    public function connect(): bool{

        if(mysql_connetion::$link==null) {
            mysql_connetion::$link = mysqli_connect(db_config::$mysqlhost, db_config::$mysqlusername, db_config::$mysqlpassword, db_config::$mysqldatabase, db_config::$mysqlport);
            if (mysqli_connect_errno()) {
                return false;
            }else{
                return true;
            }
        }else{
            return false;
        }
    }
    public function getLink(){
        if(mysql_connetion::$link==null){
            mysql_connetion::connect();
        }
        return mysql_connetion::$link;
    }
    public function disconnect(): bool {
        if(mysql_connetion::$link!==null) {
            mysqli_close(mysql_connetion::$link);
            return true;
        }else{
            return false;
        }
    }
    public function query($query): bool{
        if(mysql_connetion::$link==null){
            mysql_connetion::connect();
        }
        if(mysql_connetion::$link!==null) {
            if(mysqli_query(mysql_connetion::$link, $query)===TRUE){
                return true;
            }else {
                return false;
            }
        }
    }
    public function result($query){
        if(mysql_connetion::$link==null){
            mysql_connetion::connect();
        }
        if(mysql_connetion::$link!==null) {
            if($result = mysqli_query(mysql_connetion::$link, $query)){
                return $result;
            }else {
                return null;
            }
        }
    }
}