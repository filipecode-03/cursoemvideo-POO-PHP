<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once 'Colirio.php';
        $c1 = new Colirio;
        $c1->cor = 'Azul';
        $c1->tampar();
        $c1->pingar();
    ?>
</body>
</html>