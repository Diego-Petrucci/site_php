<?php

    include_once('config.php');

    if(isset($_POST['atualizar'])){
        $id = $_POST['id'];
        $musica = $_POST['musica'];
        $artista = $_POST['artista'];
        $link = $_POST['link'];

        $sqlUpdate = "UPDATE playlists SET musica='$musica', artista='$artista', link='$link' WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
}
    header('Location: playlist.php');

?>