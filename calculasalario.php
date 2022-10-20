<html lang="pt-br">
<head>
    <title>Resultado do salário</title>
    <meta charset="utf-8">
</head>

<body>
    <?php
    $valor = $_POST['txtvalor'];
    $horas = $_POST['nhoras'];
    $salario= $valor * $horas;
    echo "De acordo com as informações digitadas na página anterior, o
    salário é de R$".$salario.",00";
    ?>  
    
</body>
</html>
