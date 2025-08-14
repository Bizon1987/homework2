<?php

$input1 = trim(fgets(STDIN));
$input2 = trim(fgets(STDIN));

if (filter_var($input1, FILTER_VALIDATE_INT) === false || filter_var($input2, FILTER_VALIDATE_INT) === false) {
    fwrite(STDERR, "Введите, пожалуйста, число\n");
    exit(1);
}

$num1 = (int)$input1;
$num2 = (int)$input2;

if ($num2 === 0) {
    fwrite(STDERR, "Делить на 0 нельзя\n");
    exit(1);
}

$result = $num1 / $num2;

echo $result . PHP_EOL;