<?php
$var1=(trim($_POST['var1']));
$var1=(trim($_POST['var1']));

$soma = $var1 + $var2;
$subtração = $var1 - $var2;
$multiplicacao = $var1 * $var2;
$divisao = $var1 / $var2;

$data = [
    'soma' => $soma,
    'divisao' => $divisao,
    'multiplicacao' => $multiplicacao,
    'subtracao' => $subtração
];

echo json_encode($data);