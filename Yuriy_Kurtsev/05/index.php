
<h1> Звывести на экран нечётные числа в диапазоне от 1 до 50, с помощью цикла for </h1>
<?php
$n = 50;

    for($i = 1;$i <= 50;$i++)
        if($i%2 == 1)
        {
            echo $i, "<br>";
        }

echo "<hr>";
?>
<h1> Найти сумму 1+4+7+10+...+n. n - можно изменять. </h1>
<?php
$n = 40;
$sum = 0;
    for($i = 1; $i < $n; $i += 3)
    {
        $sum += $i;
    }
echo "Сумма чисел 1, 4, 7, 10, .. , $n = $sum <br>";

echo "<hr>";
?>

<h1> Создать массив из n чисел, каждый элемент которого равен квадрату своего номера.</h1>

<?php
$array = [1,2,3,4,5,6,7,8,9,10];
    foreach($array as $a => $b)
    {
        $array[$a] = pow($b,2);
        echo $array[$a]. '<br>';
    }

echo "<hr>";
?>
<h1> Заполнить массив длины n нулями и единицами, при этом данные значения чередуются, начиная с нуля.</h1>
<?php
$array = [1,2,3,4,5,6,7,8,9,10];
    foreach ($array as $a)
    {
        if ($array%2 == 1){
            echo $array = 0;
        }
        else{
            echo $array = 1;
        }
        echo $array[$a]. '<br>';
    }
echo "<hr>";
?>
<h1> Определите, есть ли в массиве повторяющиеся элементы.</h1>
<?php
$array = [1,2,3,4,4,6,7,8,3,10];

print_r(array_diff(array_count_values($array), array('1')));
echo "<hr>";
?>
<h1> Удалите в массиве повторы значений. Например, для массива 1 2 4 4 2 5 результатом будет 1 2 4 5</h1>
<?php
$array = [1,2,3,4,4,6,7,8,3,10];

print_r(array_unique($array));
echo "<hr>";
?>
<h1> Дан массив размера n. После каждого отрицательного элемента массива вставить элемент с нулевым значением.</h1>
<?php

$array = [-1,2,-19,4,6,-5,8,9];
$n = count($array);
    for ($i = 0; $i < $n; $i++)
    {
        if ($array[$i] < 0)
        {
            $array[$i] = 0;
        }
}
print_r($array);
echo "<hr>";
?>
<h1>Упорядочить значения массива по возрастанию. Реализовать двумя способами: с помощью стандартной функции и без.</h1>
<?php
$array = [1,2,19,4,6,5,8,9];
asort($array);
foreach ($array as $a){
    echo $a, "<br>";
}
echo "<hr>";
?>
