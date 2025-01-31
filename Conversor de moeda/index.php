<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moeda</title>
</head>
<body>
    <?php 
    $dolar = 5.90;
    $real = 37;
    $valor = 37 * 5.90;
    $valorformatado = "$" . number_format($valor, 2, '.' , ',');


    echo "O valor de R$37,00 em dólares é $valorformatado";
    ?>

    
</body>
</html>