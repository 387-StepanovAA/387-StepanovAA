<?php
echo 'Задача 1';
echo '<br>';
$a = 5;
$b = 10;
$c = 3;
echo ("Результат сложения ");
echo $a + $b;
echo '<br>';
echo 'Задача 2';
echo '<br>';
echo ("Результат вычитания ");
echo $a - $b;
echo '<br>';
echo 'Задача 3';
echo '<br>';
echo ("Результат умножения ");
echo $a * $b * $c;
echo '<br>';
echo 'Задача 4';
echo '<br>';
echo ("Результат вычисления корня переменной b ");
echo sqrt($b);
echo '<br>';
echo 'Задача 5';
echo '<br>';
echo ("И ИЛИ  ");
$isActive = true;
if ($isActive == true){
    echo ' (if)isActive is true';
    echo '<br>';
}
//или
if($isActive){
    echo '(if4) isActive is true';
    echo '<br>';
} else if ($isActive == false) {

} else {
    echo '(if4) isActive is false';
    echo '<br>';
}
echo 'Задача 6';
echo '<br>';
echo ("Массив ");
$mas = [1,2,3,4,5,6,7,8,9,10];
var_dump($mas);
echo '<br>';
echo 'Задача 7';
echo '<br>';
echo ("Ассоциативный массив ");
$amas = [ 1=> 'пн',2=>'вт'];
var_dump($amas);
echo '<br>';
echo 'Задача 8';
echo '<br>';
echo ("Ассоциативный массив ");
$amas1 = [ 300=> 'Вася',400=>'Петя'];
var_dump($amas1);
echo '<br>';
echo 'Задача 9';
echo '<br>';
echo ("Преобразование строк ");
$strtr = "Петров Петр Петрович";
echo $strtr;
$arr = explode(' ', $strtr);
$mrmr = substr($arr[1],0,2);
$mrmr1 = substr($arr[2],0 ,2);
echo '<br>';
echo $arr[0] . ' ' . $mrmr1 . '.' . ' ' . $mrmr;
?>