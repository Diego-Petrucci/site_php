<?php
    session_start();
    if(isset($_POST['submit'])){
        
        include_once('config.php');

        $musica = $_POST['musica'];
        $artista = $_POST['artista'];
        $link = $_POST['link'];
        $id_user = $_SESSION['id_user']; 
        
        
        $result = mysqli_query($conexao, "INSERT INTO playlists (artista, musica, link, id_user)
        VALUES ('$artista', '$musica', '$link', '$id_user')");
        header('Location: playlist.php');
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
    <a href="playlist.php"><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-left' viewBox='0 0 16 16'>
    <path fill-rule='evenodd' d='M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z'/>
    </svg></a>
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
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="link" id="link" class="inputUser" required>
                    <label for="link" class="labelInput">Link da musica</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit" value="Adicionar">
            </fieldset>
        </form>
    </div>
</body>
</html>