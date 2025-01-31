<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Desconto</title>
</head>
<body>
    <?php 
    $PS5 = 3500;
    $desconto = 10;

    $valor = $PS5 * $desconto/100;
    $valortotal = $PS5 - $valor;
    $valortotal = "R$" . number_format($valortotal,2,',','.');
    $PS5real = 'R$' . number_format($PS5,2,',','.');
    echo "De $PS5real o valor do PS5 sai por $valortotal";

    ?>
    
</body>
</html>