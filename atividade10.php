<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci </title>
</head>
<body>
<?php
function fibonacciAte($limite) {
    $a = 0;
    $b = 1;
    echo "Sequência de Fibonacci até $limite: ";
    while ($a <= $limite) {
        echo $a . " ";
        $temp = $a;
        $a = $b;
        $b = $temp + $b;
    }
    echo "\n";
}

$numero = 100;
fibonacciAte($numero);
?>

</body>
</html>