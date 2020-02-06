<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    // pegar os dados da tela
    $email = $_POST["email"];
    $senha = md5($_POST["senha"]);

    //impressão no php
    echo "E-mail :".$email."<br>";
    echo "Senha :".$senha;
    
    
    
    ?>
    <!-- fora do php -->
</body>
</html>