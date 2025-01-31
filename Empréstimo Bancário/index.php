<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empréstimo Bancário</title>
</head>
<body>
    <?php 
    $empréstimo = 1000.00;
    $taxadejuros = 10.1;
    $numerodeparcelar = 12;
    $valor = $empréstimo * (1+$taxadejuros) / $numerodeparcelar;

    echo "O valor do empréstimo de juros é $valor";
    ?>
    
</body>
</html>