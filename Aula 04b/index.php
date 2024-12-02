<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once 'Caneta.php';
        $c1 = new Caneta("BIC", "Azul", 0.5);
        $c1 = new Caneta("KKK", "Verde", 1.0);
    ?>
</body>
</html>