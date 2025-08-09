<?php
$variable = 5.5;
$testFunc = is_int($variable);
//var_dump($variable);

if($testFunc == true) {
    echo "В переменной седержится int" . PHP_EOL;
} else {
    echo "В переменной не содержится int" . PHP_EOL;
}

$testFunc2 = is_float($variable);
if($testFunc2 == true) {
    echo "В переменной содержится float" . PHP_EOL;
} else {
    echo "В переменной не содержится float" . PHP_EOL;
}

$testFunc3 = is_bool ($variable);
if($testFunc3 == true) {
    echo "В переменной седержится bool" . PHP_EOL;
} else {
    echo "В переменной не содержится bool" . PHP_EOL;
}

$testFunc4 = is_string($variable);
if($testFunc4 == true) {
    echo "В переменной седержится string" . PHP_EOL;
} else {
    echo "В переменной не содержится string" . PHP_EOL;
}

$testFunc5 = is_null($variable);
if($testFunc5 == true) {
    echo "В переменной седержится null" . PHP_EOL;
} else {
    echo "В переменной не содержится null" . PHP_EOL;
}

switch (true) {
    case is_int($variable):
        $type = 'int';
        break;
    case is_float($variable):
        $type = 'float';
        break;
    case is_bool($variable):
        $type = 'bool';
        break;
    case is_string($variable):
        $type = 'string';
        break;
    case is_null($variable):
        $type = 'null';
        break;
    default:
        $type = 'неизвестный тип';
}

echo "В переменной содержится $type" . PHP_EOL;


