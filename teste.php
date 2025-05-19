<?php
echo "Hospedagem foda"
?>  

<?php
// Simula o número sorteado entre 1 e 6
$numeroSorteado = rand(1, 6);

// Define uma mensagem de resultado
if ($numeroSorteado == 1) {
    $resultado = "BANG! Você foi atingido!";
    $arma = "🔫";  // Emoticon de arma
    $classeResultado = "perdeu";
} else {
    $resultado = "Ufa, você sobreviveu!";
    $arma = "🔫";  // Emoticon de arma
    $classeResultado = "sobreviveu";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roleta Russa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .roleta-container {
            text-align: center;
            background-color: #222;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.3);
            max-width: 500px;
            width: 100%;
        }

        .resultado {
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
        }

        .perdeu {
            color: red;
        }

        .sobreviveu {
            color: limegreen;
        }

        .arma {
            font-size: 40px;
            margin-top: 10px;
        }

        .botao {
            margin-top: 30px;
            padding: 15px 30px;
            font-size: 18px;
            cursor: pointer;
            background-color: #ff3333;
            color: #fff;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .botao:hover {
            background-color: #cc0000;
        }
    </style>
</head>
<body>

<div class="roleta-container">
    <h1>Roleta Russa</h1>
    <div class="arma"><?= $arma ?></div>
    <div class="resultado <?= $classeResultado ?>">
        <?= $resultado ?>
    </div>
    <form method="POST">
        <button class="botao" type="submit">Girar a roleta</button>
    </form>
</div>

</body>
</html>
