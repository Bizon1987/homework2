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

