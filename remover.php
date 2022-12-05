<?php
    session_start();
    if(!empty($_GET['id'])){
        
        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM playlists WHERE id = $id"; 

        $result = $conexao -> query($sqlSelect);

        if($result -> num_rows > 0 ){   
            $sqlDelete =  "DELETE FROM playlists WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);         
        }
    }
    header('Location: playlist.php');
?>