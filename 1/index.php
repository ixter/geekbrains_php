<!--первая часть-->
<?php

  $a = 5;
  $b = '05';
    var_dump($a == $b); // Почему true?
        echo '<br>';
        echo 'Мягкое сравнение в котором все приводится к одному типу числу в данном случае b будет равно 5 - 0 не учтется';
        echo '<br>';
    var_dump((int)'012345');                        // Почему 12345?
        echo '<br>';
        echo 'Первый 0 не имеет значения в числовых значениях';
        echo '<br>';
    var_dump((float)123.0 === (int)123.0); // Почему false?
        echo '<br>';
        echo 'Приведено жесткое сравнение';
        echo '<br>';
    var_dump((int)0 === (int)'hello, world'); // Почему true?
        echo '<br>';
        echo 'первый параметр равен 0 и 2 параметр равен 0 так как в нем нет чисел буквы за них не считаются.';
        echo '<br>';
        echo '<br>';
        echo '<br>';

?>

<!--вторая часть-->
<?php

$login = 'admin';
$title = 'Document';
$hello = 'hello World!';
$date = date('m/d/Y h:i:s a', time());
$isAdmin = true;
$a = 1;
$b = 2;

echo '<br>';
echo 'инфа';
echo '<br>';
var_dump('__'.$login.' <--логин <br>', $title.' <--тайтл <br>', $hello.' <--хелло <br>',$date.' <--дата <br>' ,$isAdmin.' <--админ <br>' ,$a.' <--a <br>' ,$b.' <--b <br>');
echo '<br>';
echo '<br>';
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php $title ?> </title> <br>
</head>
<body>
<?php echo '<h1>'.$hello.'</h1>'; ?>
<?php echo $date ?> <br>

<?php echo '<h2> 5 задание </h2>'; ?>
<?php echo 'php 7.1 и выше. Вариант 1' ?> <br>
<?php var_dump([$a,$b]=[$b.'b',$a.'a']); ?> <br>
<br>
<br>
<?php echo 'Вариант 2' ?> <br>
<?php echo '$a=2;$b=1;' ?> <br>
<?php echo var_dump($a = 2, $b = 1); ?> <br>
<br>
<br>
<?php echo 'Вариант 3' ?> <br>
<?php $a=1;$b=2; ?>
<?php echo '$a=1;$b=2;' ?> <br>
<?php echo var_dump($a, $b); ?> <br>
<?php echo 'list($a,$b)=[$b,$a]' ?> <br>
<?php echo var_dump(list($a,$b)=[$b,$a]); ?> <br>
</body>
</html>
