<?php
    if(isset($_POST['submit'])){
        
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sexo = $_POST['sexo'];
        $data_nascimento = $_POST['data_nascimento'];
        
        $result = mysqli_query($conexao, "INSERT INTO usuarios (nome, email, senha, sexo, data_nascimento)
        VALUES ('$nome', '$email', '$senha', '$sexo', '$data_nascimento')");

        header('Location:tela_login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(135deg, #001247 0%, #00bfff 100%);
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform:translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 20px;
            width: 20%;
            color: white;
        }
        fieldset{
            border: 3px solid;
            border-radius: 15px;
            border-color: #00486f ;
        }
        legend{
            padding: 10px;
            text-align: center;
            background-color: #00486f ;
            border-radius: 10px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: #00486f  ;
        }
        #data_nascimento{
            border: none;
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 8px;
            padding-bottom: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-color:  #00486f ;
            border: none;
            width: 100%;
            padding: 15px;
            color: white;
            font-size: 20px;
            border-radius: 20px;
            cursor: pointer;
        }
        #submit:hover{
            background-color:deepskyblue;
        }
        a{
            position: absolute;
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;  
            border-radius: 15px;
            padding: 20px;
            background-color: dodgerblue;
        }
        a:hover{
            background-color: red;
            border: 3px solid red; 
        }
    </style>
</head>
<body>
    <a href="home.php"><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-left' viewBox='0 0 16 16'>
    <path fill-rule='evenodd' d='M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z'/>
    </svg></a>
    <div class="box">
        <form action="formulario.php" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend><b>Cadastro de usuarios</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">senha</label>
                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="sexo" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="sexo" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="sexo" value="outro" required>
                <label for="outro">Outro</label>
                <br><br><br>
                    <label for="data_nascimento">Data de Nascimento:</label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br>
                <input type="submit" name="submit" id="submit" value="Cadastrar">
            </fieldset>
        </form>
    </div>
</body>
</html>