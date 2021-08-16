<?php
$f = [];
$a = readline('Введите перечень ');
$a = str_split($a);
foreach ($a as $k => $b) {
    if (in_array($b, ['(', '[', '{'])) {
        $f[count($f)] = $b;
    }
    if (empty($f)) {
        if (in_array($b, [')', ']', '}'])) {
            echo ('Ошибка');
        }
    } else {
        $t = $f[count($f) - 1];

        if ($b == ')' && $t == '(') {
            unset($f[count($f) - 1]);
            echo ('Есть скобки круглые');
        }
        if ($b == ']' && $t == '[') {
            unset($f[count($f) - 1]);
            echo ('Есть скобки квадратные');
        }
        if ($b == '}' && $t == '{') {
            unset($f[count($f) - 1]);
            echo ('Есть скобка фигурная');
        }
    }
}
