<!DOCTYPE html>
<html lang="en">
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['verificar_palavra'])) {
        $altura = $_POST['altura'];
        $peso = $_POST['peso'];
    }

    if (is_numeric($peso) && is_numeric($altura) && $altura > 0) {
        $imc = $peso / ($altura * $altura);

        if ($imc < 18.5) {
            $classificacao = "Magreza";
        } elseif ($imc < 25) {
            $classificacao = "Peso normal";
        } elseif ($imc < 30) {
            $classificacao = "Sobrepeso";
        } else {
            $classificacao = "Obesidade";
        }

        echo "Seu IMC é: " . $imc . "<br>";
        echo "Classificação: " . $classificacao;
    } else {
        echo "Por favor, insira valores válidos para peso e altura.";
    }
}


?>
</body>

</html>

