<?php
    session_start();
    include_once('config.php');
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: home.php');
    }
    $sql = "SELECT * FROM playlists WHERE id_user = {$_SESSION['id_user']}";
    $result =$conexao -> query($sql);
    $sqlNome = "SELECT * FROM usuarios WHERE id_user = {$_SESSION['id_user']}";
    $resultado =$conexao -> query($sqlNome); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Playlist</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        body{
            color: black;
            text-align: center;
        }
        section {
            position: relative;
            width: 100%;
            min-height: 100vh;
            padding: 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-image: linear-gradient(315deg, #001247 0%, #00bfff 100%);
        }

        header .logo {
            position: relative;
            max-width: 60px;
        }

        header h1 {
            position: absolute;
            display: flex;
            padding-left:70px;
        }

        header ul {
            position: relative;
            display: flex;
        }

        header ul li {
            list-style: none;
        }

        header ul li a {
            display: inline-block;
            color: white;
            font-weight: 900;
            margin-left: 30px; 
            text-decoration: none;
        }


        header ul li p {
            display: inline-block;
            color: white;
            font-weight: 900;
            margin-left: 30px; 
            text-decoration: none;
        }

        .add {
            position: relative;
            align-items: center;
            width: 100%;
            display: flex;
            align-items: center;
            top:120px;
        }
        .add p {
            display: flex;
            position: relative;
            margin-left: 1500px
        }
        .add a {
            display: flex;
            position: relative;
            margin-left: 20px
        }

        .content {
            position: relative;
            width: 100%;
            display: flex;
            align-items: center;
            top:120px;
        }

        table, th, td{
            position: relative;
            border: 1px solid black;
            border-collapse: collapse;
            padding-top: 30px;
            padding-left: 80px;
            padding-right: 80px;
            padding-bottom: 30px;
        }
        table{
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <img src="images/nota_musical.png" class="logo">
        <h1>MELHORES MÚSICAS</h1>
        <ul>
            <li><p><?php $user_nome = mysqli_fetch_assoc($resultado);
            echo $user_nome['nome']?></p></li>
            <li><a class='btn btn-danger' href='sair.php'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-box-arrow-left' viewBox='0 0 16 16'>
            <path fill-rule='evenodd' d='M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z'/>
            <path fill-rule='evenodd' d='M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z'/>
            </svg>
            </a></li>
        </ul>
    </header>
    <div class="add">
        <h1>Playlist</h1>
        <p>Adicione uma música:</p>
        <a class='bi bi-plus-square' href="adicionar.php">
        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-plus-square' viewBox='0 0 16 16'>
        <path d='M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z'/>
        <path d='M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z'/>
        </svg>
        </a>
    </div>
    <div class="content">
        <table>
            <tr>
                <th>id</th>
                <th>Música</th>
                <th>Artista</th>
                <th>Ouvir</th>
                <th>Ações</th>
            </tr>
    </div>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['musica']."</td>";
                        echo "<td>".$user_data['artista']."</td>";
                        echo "<td> <a class='btn btn-primary' href='$user_data[link]' target='_blank'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-headphones' viewBox='0 0 16 16'>
                        <path d='M8 3a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V8a6 6 0 1 1 12 0v5a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h1V8a5 5 0 0 0-5-5z'/>
                        </svg>
                        </td>";
                        echo "<td> <a class='btn btn-primary' href='editar.php?id=$user_data[id]'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                        <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                        </svg>
                        </a>
                        <a class='btn btn-danger' href='remover.php?id=$user_data[id]'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                        <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                        </svg>
                        </td>";
                    } 
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>