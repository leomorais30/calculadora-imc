<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" type="text/css" href = "style2.css">
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $altura = $_POST["altura"];
        $peso = $_POST["peso"];
        $imc = $peso / ($altura * $altura);

        echo "<div class = 'resultado'> $nome, seu IMC é: " . number_format($imc, 2) . "</div>";
        if ($imc < 18.5) {
            echo "<div class = 'obesidade'>Você está abaixo do peso . </div>";
        } elseif ($imc >= 18.5 && $imc < 25) {
            echo "<div class = 'obesidade'>Seu peso está saudável. </div>";
        } elseif ($imc >= 25 && $imc < 30) {
            echo "<div class = 'obesidade'>Você está com sobrepeso . </div>";
        } elseif ($imc >= 30 && $imc < 35) {
            echo "<div class = 'obesidade'>Você está com obesidade grau I . </div>";
        } elseif ($imc >= 35 && $imc < 40) {
            echo "<div class = 'obesidade'>Você está com obesidade grau II . </div>";      
        }else {
            echo "<div class = 'obesidade'>Você está com obesidade grau III . </div>"; 
        }
    }
    ?>

    <form method="post">
        <h1> Calculadora de IMC </h1>
        <label for="nome"> Nome: </label>
        <input type="text" name="nome" required> <br><br>

        <label for="altura"> Altura (metros): </label>
        <input type="text" name="altura" id="altura" required> <br><br>

        <label for="altura"> Peso (quilos): </label>
        <input type="text" name="peso" id="peso" required> <br><br>

        <input type="submit" value="Calcular">

</body>
</html>