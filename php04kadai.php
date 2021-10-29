<?php
//課題1
function kadai1($number){
    return $number * 2;
}
echo kadai1(3);
echo "\n";

//課題2
function kadai2($a, $b){
    return $a + $b;
}
echo kadai2(18, 59);
echo "\n";

//課題3
function kadai3($arr){
    $result = 1;
    foreach($arr as $number){
        $result *= $number;
}
    return $result;    
}
echo kadai3(array(1,3,5,7,9));
echo "\n";

//課題4
function max_array($arr){
$max_number = $arr[0];
foreach($arr as $a){
    if($max_number < $a){
        $max_number = $a;
    }   else{
    }
}   return $max_number;
}
echo max_array(array(2,8,4,1,7,9,3,5,6));
echo "\n";

//課題5 strip_tags
$text = "<p>abcdef</p>";
echo strip_tags($text);
echo "\n";
echo strip_tags($text, '<p>');
echo "\n";

//課題5　array_push
$abc = array("a", "b");
array_push($abc, "c", "d");
print_r($abc);
echo "\n";

//課題5 array_merge
$a = array("リンゴ", "みかん", "バナナ");
$b = array("ぶどう", "もも");
$c = array_merge($a, $b);
print_r($c);
echo "\n";

//課題5 time
$nextweek = time() + (7 * 24 * 60 * 60);
echo 'Now:' . date('Y-m-d');
echo "\n";
echo 'Nextweek:' . date('Y-m-d', $nextweek);
//echo 'Nextweek:' . date('Y-m-d', strtotime('+1week'));　でもOK
echo "\n";

//課題5 mktime
echo date('Y-m-d-w', mktime(0, 0, 0, 12, 32, 2020));
echo "\n";

//課題5　date
date_default_timezone_set('Asia/Tokyo');
echo date("Y/m/d H:i:s");
echo "\n";

