<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(315deg, #001247 0%, #00bfff 100%);
    }
    .tela_login{
        background-color: rgba(0, 0, 0, 0.6);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding-top: 20px;
        padding-left: 80px;
        padding-right: 80px;
        padding-bottom: 60px;
        border-radius: 20px;
        color: white;
    }
    input{
        padding: 20px;
        border:none;
        border-radius: 15px;
        outline:none;
        font-size: 20px;
    }
    .inputSubmit{
        background-color: #00486f;
        border: none;
        padding: 20px;
        width: 100%;
        border-radius: 15px;
        color: white;
        font-size: 20px;
        font-family: Arial, Helvetica, sans-serif;
        cursor: pointer;
    }
    .inputSubmit:hover{
        background-color: deepskyblue;
    }
    </style>
</head>
<body>
    <div class="tela_login">
            <h1>Login</h1>
            <br>
        <form action="test_login.php" method="POST">
            <input type="text" name="email" placeholder="Email" required>
            <br><br>
            <input type="password" name="senha" placeholder="Senha" required>
            <br><br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Entrar">
        </form>
    </div>
</body>
</html>