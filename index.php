<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
    <link rel = "stylesheet" href = "style.css">
    <style>
        *{
    text-align: center;
    background: linear-gradient(to left, aquamarine);
    font-size: 22px;
    border-radius: 21px;
    border-color: fuchsia;
    color:rgb(0, 0, 0);
    margin: 15px 08px;
    padding: 30px;
}

h1{
    color: rgb(255, 255, 255);
    background-color: fuchsia;
}

button{
    background-color: fuchsia;
    color: white;
}
#resultado{
    background-color: fuchsia;
    color: aliceblue;
}
</style>
</head>
<body>
    <div class="form-container">
        <h1>Calculadora de IMC</h1>

        <form method="post" action="">
            <label for="peso">Peso (kg):</label>
            <input type="number" id="peso"  name="peso" required>

            <label for="altura">Altura (m):</label>
            <input type="number" step="0.01" id="altura" name="altura" required>

            <button type="submit">Calcular</button>

</form>
<div>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];

        $imc = $peso / ($altura * $altura);
        $imc = round($imc, 1); //arredonda para uma casa decimal

        echo "<div id='resultado'>Seu IMC é: $imc</div>";

    }

    ?>


</body>
</html>