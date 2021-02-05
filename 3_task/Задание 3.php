<?php
$mass = range (1,100);
echo array_sum (range (1,100)). '<br>';
$arr = ['a', 'b', 'c', 'd', 'e',];
$arr = array_map ('strtoupper',$arr);
var_dump ($arr);
echo '<br>';
echo count ($arr);//1
echo '<br>';
echo $arr[count($arr)-1];//2
echo '<br>';
$rr = [1,2,3,4, 5];
var_dump(in_array(3, $rr));//3
echo '<br>';
echo array_sum ($rr). '<br>';//4
echo array_product ($rr). '<br>';//5
echo ( array_sum ($rr) / count ($rr)). '<br>';//6
$gg = range (1,100,1);  //7
var_dump ($gg). '<br>';
$ll = range (a ,z ,1);    //8
var_dump ($ll). '<br>';
echo '<br>' . '<b>';
$dd = range (1,9,1);    //9
$dd = implode ('-',$dd);
echo $dd;
$aa = range (1,100,1);//10
echo '<br>'. '<b>';
echo array_sum ($aa). '<br>';
$pp = range (1,10,1);//11
echo array_product ($pp). '<br>';
$hh = ['a','b','c'];//11
$ee = [1,2,3];
$yer = array_merge ($ee,$hh);
print_r($yer). '<br>';
$nn = ['a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5];//12
echo '<br>';
var_dump(array_slice($nn, 1, 3)). '<br>';
$jj = [1,2,3,4,5];//13
echo '<br>';
$res = (array_splice($jj,1,2));
var_dump($jj);
echo '<br>';
$pp = [1,2,3,4,5];
$gg = array_splice($pp,1,3);
var_dump($gg);
$pp = [1,2,3,4,5];
$resy = array_splice($pp,3,0,['a','b','c']);
echo '<br>';
var_dump($pp);
echo '<br>';
$pp = [1,2,3,4,5]; // С помощью функции array_splice сделайте из него массив [1, 'a', 'b', 2, 3, 4, 'c', 5, 'e'].
array_splice($pp,1,0,['a','b']);
array_splice($pp,6,0,['c']);
array_splice($pp,8,0,['e']);
var_dump($pp);
echo '<br>';
$kk = ['a'=>1,'b'=>2,'c'=>3];//Дан массив 'a'=>1, 'b'=>2, 'c'=>3'. Запишите в массив $keys ключи из этого массива, а в $values – значения.
$keys = array_keys($kk);
$values = array_values($kk);
var_dump($keys);
echo '<br>';
var_dump($values);
echo '<br>';
$result = array_combine($keys,$values);
var_dump($result);
echo '<br>';
var_dump (array_flip($kk));
$pp = [1,2,3,4,5];
echo '<br>';
var_dump(array_reverse($pp));
echo '<br>';
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];//Дан массив ['a', '-', 'b', '-', 'c', '-', 'd']. Найдите позицию первого элемента '-'.
echo array_search('-',$arr);
echo '<br>';
var_dump(array_splice($arr,1,1));
echo '<br>';
$arr = ['a', 'b', 'c', 'd', 'e'];
$result = array_replace($arr, [0=>'!', 3=>'!!']);
var_dump($result);
echo '<br>';
$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];    //Дан массив '3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'. Попробуйте на нем различные типы сортировок.
sort($arr);
var_dump($arr);
echo '<br>';
$arr = ['a'=>1, 'b'=>2, 'c'=>3];   // Дан массив с элементами 'a'=>1, 'b'=>2, 'c'=>3. Выведите на экран случайный ключ из данного массива.
$keys = array_rand($arr);
var_dump($keys);
echo '<br>';
$values = array_values($arr);
var_dump(array_rand($values));
echo '<br>';
$arr = [1,2,3,4,5]; //Дан массив $arr. Перемешайте его элементы в случайном порядке.
shuffle($arr);
var_dump($arr);
echo '<br>';
$arr = range(1,100,1);
shuffle($arr);
var_dump($arr);
echo '<br>';
$arr = range(a,z,1);
shuffle($arr);
var_dump($arr);
echo '<br>';
$arr = range(a,t,1);
shuffle($arr);
var_dump($arr);
echo '<br>';
$arr = ['a', 'b', 'c', 'b', 'a'];    //Дан массив с элементами 'a', 'b', 'c', 'b', 'a'. Удалите из него повторяющиеся элементы.
var_dump(array_unique($arr));
echo '<br>';
$arr = [1,2,3,4,5]; //Дан массив с элементами 1, 2, 3, 4, 5. Выведите на экран его первый и последний элемент, причем так, чтобы в исходном массиве они исчезли
$arrs = array_shift($arr);
$arrp = array_pop($arr);
var_dump($arrs,$arrp);
echo '<br>';
$arr = [1,2,3,4,5]; //Дан массив с элементами 1, 2, 3, 4, 5. Добавьте ему в начало элемент 0, а в конец - элемент 6.
$arru = array_unshift($arr,0);
$arrp = array_push($arr,6);
var_dump($arr);
echo '<br>';
$arr = [1, 2, 3, 4, 5, 6, 7, 8]; // 35 zadanie
$str = '';
while (count($arr) > 0) {
    $str .= array_shift($arr);
    $str .= array_pop($arr);
}
echo $str;
echo '<br>';
$arr = ['a','b','c'];    // Дан массив с элементами 'a', 'b', 'c'. Сделайте из него массив с элементами 'a', 'b', 'c', '-', '-', '-'.
var_dump(array_pad($arr,6,'-'));
echo '<br>';
$arr = []; //Заполните массив 10-ю буквами 'x'.
var_dump(array_pad($arr,10,'x'));
echo '<br>';
$arr = range(1,20,1);    // Создайте массив, заполненный целыми числами от 1 до 20. С помощью функции array_chunk разбейте этот массив на 5 подмассивов ([1, 2, 3, 4]; [5, 6, 7, 8] и т.д.).
$result = array_chunk($arr,4);
var_dump($result);
echo '<br>';
$arr = ['a','b','c','b','a'];    //Дан массив с элементами 'a', 'b', 'c', 'b', 'a'. Подсчитайте сколько раз встречается каждая из букв.
var_dump(array_count_values($arr));
echo '<br>';
$arr = [1,2,3,4,5];    //Дан массив с элементами 1, 2, 3, 4, 5. Создайте новый массив, в котором будут лежать квадратные корни данных элементов.
$result = array_map('sqrt',$arr);
var_dump($result);
echo '<br>';
$arr = ['<b>php</b>', '<i>html</i>'];    // Дан массив с элементами '<b>php</b>', '<i>html</i>'. Создайте новый массив, в котором из элементов будут удалены теги.
$result = array_map('strip_tags',$arr);
var_dump($result);
echo '<br>';
$arr = [' a ', ' b ', ' с '];    //Дан массив с элементами ' a ', ' b ', ' с '. Создайте новый массив, в котором будут данные элементы без концевых пробелов.
$result = array_map('trim',$arr);
var_dump($result);
echo '<br>';
$arr1 = [1, 2, 3, 4, 5]; //Дан массив с элементами 1, 2, 3, 4, 5 и массив с элементами 3, 4, 5, 6, 7. Запишите в новый массив элементы, которые есть и в том, и в другом массиве.
$arr2 = [3, 4, 5, 6, 7];
$result = array_intersect($arr1, $arr2);
var_dump($result);
echo '<br>';
$result = array_diff($arr1,$arr2);
var_dump($result);
echo '<br>';
$arr = range(1,9,1);    //Создайте массив вида [[1, 2, 3], [4, 5, 6], [7, 8, 9]] не используя цикл
$result = array_chunk($arr,3);
var_dump($result);
echo '<br>';
$keys = range(a,z,1);    // Создайте массив ['a'=>1, 'b'=2... 'z'=>26] не используя цикл
$values = range(1,26,1);
$result = array_combine($keys,$values);
var_dump($result);
echo '<br>';
$arr = [1,2,3,4,5];   //Дан массив с элементами 1, 2, 4, 5, 5. Найдите второй по величине элемент. В нашем случае это будет 4.
var_dump(array_search(4,$arr));
echo '<br>';
$arr = '1234567890'; // Дана строка '1234567890'. Найдите сумму цифр из этой строки не используя цикл.
$result = array_sum(str_split($str, 2));
echo $result;
?>