<?php


class readText
{
    private $file = "";

    function __construct(String $file) {
        $this->file=$file;
    }

    public function getString():string
    {
        $txt = "";
        if (file_exists( $this->file)) {
            if ($fileman = fopen($this->file, "r")) {
                while (!feof($fileman)) {
                    $txt .= fgets($fileman) . "<br>";
                }
            }
            return $txt;
        }
    }

    public function getArray():array
    {
        $txt = array();
        if (file_exists( $this->file)) {
            if ($fileman = fopen($this->file, "r")) {
                while (!feof($fileman)) {
                    $txt[]=fgets($fileman);
                }
            }
            return $txt;
        }
    }

}