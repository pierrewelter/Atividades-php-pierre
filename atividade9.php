<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>soma de todos os números</title>
</head>
<body>
    <form method="POST" action="">
        <label for="num1">Digite um número:</label>
        <input type="number" name="num1" id="num1" required>
                <label for="num2">Digite outro número:</label>
        <input type="number" name="num2" id="num2" required>
        
    </form>
    <?php
 if ($inicio > $fim) {
    $soma = 0;
for ($i = $inicio; $i <= $fim; $i++) {
    $soma += $i;
    }
echo "A soma de todos os números entre $inicio e $fim é: $soma";
?>
</body>
</html>