/**
* Created by PhpStorm.
* User: klass
* Date: 17.01.2019
* Time: 22:46
*/
<?php
//1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
$a = random_int(0, 15);
$b = random_int(-100, 100);
echo '<br>';
echo 'a равно';
var_dump($a);
echo '<br>';
echo 'b равно ';
var_dump($b);
echo '<br>';

function check($a, $b) {
    //если $a и $b положительные, вывести их разность;
    if($a >= 0 and $b >= 0){
        echo '<br>';
        echo '$a - $b';
        var_dump($a - $b);
        echo '<br>';
    }
//2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.
    switch ($a) {
        case 0:
            echo "a равно 0";
            break;
        case 1:
            echo "a равно 1";
            break;
        case 2:
            echo "a равно 2";
            break;
        case 3:
            echo "a равно 3";
            break;
        case 4:
            echo "a равно 4";
            break;
        case 5:
            echo "a равно 5";
            break;
        case 6:
            echo "a равно 6";
            break;
        case 7:
            echo "a равно 7";
            break;
        case 8:
            echo "a равно 8";
            break;
        case 9:
            echo "a равно 9";
            break;
        case 10:
            echo "a равно 10";
            break;
        case 11:
            echo "a равно 11";
            break;
        case 12:
            echo "a равно 12";
            break;
        case 13:
            echo "a равно 13";
            break;
        case 14:
            echo "a равно 14";
            break;
        case 15:
            echo "a равно 15";
            break;
        default:
            echo "error";
    }
}
echo '<br>';
echo 'проверка разности';
check($a, $b);
echo '<br>';
//3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.
function Sum ($a, $b) {
    return $a + $b;
};
echo '<br>';
echo 'сумма';
var_dump(Sum($a, $b));
echo '<br>';
function Difference ($a, $b) {
    return $a - $b;
};
echo '<br>';
echo 'разность';
var_dump(Difference($a, $b));
echo '<br>';
function Multiplication ($a, $b) {
    return $a * $b;
};
echo '<br>';
echo 'умножение';
var_dump(Multiplication($a, $b));
echo '<br>';
function Division ($a, $b) {
    return $a / $b;
};
echo '<br>';
echo 'деление';
var_dump(Division($a, $b));
echo '<br>';

//4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов,
// $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций
// (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
echo '<br>';
echo 'mathOperations';
echo '<br>';
function mathOperation($arg1, $arg2, $operation){

    switch ($operation) {
        case 'Sum':
            echo 'Sum';
            var_dump(Sum($arg1, $arg2));
            break;
        case 'Difference':
            echo 'Difference';
            var_dump(Difference($arg1, $arg2));
            break;
        case 'Multiplication':
            echo 'Multiplication';
            var_dump(Multiplication($arg1, $arg2));
            break;
        case 'Division':
            echo 'Division';
            var_dump(Division($arg1, $arg2));
            break;
        default:
            echo "error";
    }
}
mathOperation($a, $b, 'Sum');
mathOperation($a, $b, 'Difference');
mathOperation($a, $b, 'Multiplication');
mathOperation($a, $b, 'Division');
echo '<br>';
echo '<br>';

//5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.
$getYear = "<h3>" . date("Y") . "</h3>";


//6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow),
// где $val – заданное число, $pow – степень.
function power($val, $pow) {
    if ($pow != 1) { // пока n != 1, сводить вычисление pow(x,n) к pow(x,n-1)
        return $val * pow($val, $pow - 1);
    } else {
        return $val;
    }
}
echo '<br>';
echo '6.$val – заданное число, $pow – степень.';
var_dump(power(2, 3) ); // 8
echo '<br>';

//7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
//22 часа 15 минут
//21 час 43 минуты
echo '<br>';
echo '7. *Написать функцию, которая вычисляет текущее время';
function plural_form($number, $after) {
    $cases = array (2, 0, 1, 1, 1, 2);
    echo $number.' '.$after[ ($number%100>4 && $number%100<20)? 2: $cases[min($number%10, 5)] ];
}
echo '<br>';
//var_dump(date("H:i:s"));
echo 'Текущее время ';
plural_form(date("H"),array('час ','часа ','часов ')).' '.plural_form(date("i"),array('минута ','минуты ','минут '));
//var_dump(date("H:i:s"));
echo '<br>';

    $title = 'Упражнение 4';
    $content = "<h3>Домашнее задание. Упражнение 4.</h3> 
                    <h1>Hello World</h1>";
    $today = "<h3>" . date("d.m.Y") . "</h3>";

    $html = <<<php
            <!doctype html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport"
                      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Document</title>
            </head>
            <body>
            
            
               <footer>
               <span> задача 5 вывод года в футере {$getYear}</span>
               
                </footer>
            </body>
            </html>
php;
echo $html;



