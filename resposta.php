<?php 
require('quiz.php');

if (!$_POST) {
    header('Location: index.php');
    die;
}

foreach ($_POST as $value) {

    $number = (int) $value;

    if (!is_int($number) || $number > 5 || $number < 1) {
        header('Location: index.php');
        die;
    }
}

$result = new Quiz;
$answer = $result->answers($_POST);

echo $answer . '<br /><br /> <a href="index.php">Faça o teste novamente</a>';
