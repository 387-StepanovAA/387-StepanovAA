<?php

//implode "VarDumper.php";

class snake
{
    public $inn = '------------------------';

    public function snak()
    {
        $sna = $this->inn;
        $arr = str_split($sna);
        foreach ($arr as $key => $x) {
            $arr[$key] = "*";
            $key++;
            $arr[$key] = '>';

            echo implode($arr) . '<br>';
        }
    }
}

$n = new snake();
$n->snak();


?>