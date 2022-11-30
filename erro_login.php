<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro</title>
    <style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(315deg, #001247 0%, #00bfff 100%);
    }
    .erro_login{
        background-color: rgba(0, 0, 0, 0.6);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding-top: 60px;
        padding-bottom: 60px;
        padding-left:100px;
        padding-right:100px;
        border-radius: 20px;
        color: white;
        text-align: center;
    }
    a{
        background-color: #00486f;
        position: relative;
        text-decoration: none;
        color: white;
        border: 3px solid dodgerblue;  
        border-radius: 15px;
        padding-top: 20px;
        padding-bottom: 20px;
        padding-left:100px;
        padding-right:100px;
        }
    a:hover{
        background-color: dodgerblue;
    }
    </style>
</head>
<body>
    <div class="erro_login">
        <img src="triangulo.png" width='300px'>
        <br>
        <br>
        <br>
        <h1>ERRO!</h1>
        <h3>Email e/ou senha inválido(s)!</h3>
        <h3>TENTE NOVAMENTE!</h3>
        <br>
        <br>
        <br>
        <a href="tela_login.php">OK!</a>
    </div>
</body>
</html>