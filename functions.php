<?php

@include_once( __DIR__ . '/engine/modules/yonger/common/scripts/functions.php');

function dateform($date)
{
    return date('d.m.Y', strtotime($date));
}

function text2tel($str) {
    $tel =  preg_replace("/\D/", '', $str);
    if (strlen($tel) == 11 && substr($tel,0,1) == "8") {
        $tel = "7".substr($tel,1);
    }
    return $tel;
}

function fmtPrice($sum) {
    return number_format($sum, 0, '.', ' ');
}
?>