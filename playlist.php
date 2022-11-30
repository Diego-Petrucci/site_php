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
    //print_r($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist</title>
    <style>
        body{
            color: black;
            text-align: center;
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
    <a href="adicionar.php">ADICIONAR</a>
    <h1>PLAYLISTS
    <div class='tabela'>
        <table>
            <tr>
                <th>id</th>
                <th>Música</th>
                <th>Artista</th>
                <th>Ações</th>
            </tr>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['musica']."</td>";
                        echo "<td>".$user_data['artista']."</td>";
                        echo "<td> <a href='editar.php'>EDITAR</a> <a href='remover.php'>REMOVER</a> </td>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>