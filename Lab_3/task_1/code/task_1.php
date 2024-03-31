<?php
echo "<pre>";

// task a
$regexp1 = '/a..b/';
$matches1 = [];
$str1 = 'ahb acb aeb aeeb adcb axeb';
preg_match_all($regexp1, $str1, $matches1);
var_dump($matches1)."\n";

//Task b
$regexp2 = '/[0-9]/';
$str2 = 'a1b2c3';
$matchesB = [];
preg_match_all($regexp2, $str2, $matches2);
var_dump($matchesB)."\n";

for($i = 0; $i < count($matches2[0]); $i++){
    $regexpTemp1 = "/[{$matches2[0][$i]}]/";
    $str2 = preg_replace($regexpTemp1, pow($matches2[0][$i], 3), $str2);
}
echo $str2."\n";