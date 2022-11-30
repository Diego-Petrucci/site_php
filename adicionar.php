<?php
    session_start();
    if(isset($_POST['submit'])){
        
        include_once('config.php');

        $musica = $_POST['musica'];
        $artista = $_POST['artista'];
        $id_user = $_SESSION['id_user']; 
            

       $result = mysqli_query($conexao, "INSERT INTO playlists (artista, musica, id_user)
       VALUES ('$artista', '$musica', '$id_user')");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar músicas</title>
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
    <a href="playlist.php">VOLTAR</a>
    <div class="box">
        <form action="adicionar.php" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend><b>Adicione uma música</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="musica" id="musica" class="inputUser" required>
                    <label for="musica" class="labelInput">Nome da Música</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="artista" id="artista" class="inputUser" required>
                    <label for="artista" class="labelInput">Artista</label>
                <input type="submit" name="submit" id="submit" value="Adicionar">
            </fieldset>
        </form>
    </div>
</body>
</html>