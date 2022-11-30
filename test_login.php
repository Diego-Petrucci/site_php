<?php
    session_start();
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $id_user = $_GET['id_user'];
        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
        $result = $conexao -> query($sql);
        print_r($result);

        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: erro_login.php');
        }else{

            $dados_usuario = mysqli_fetch_assoc($result);

            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            $_SESSION['id_user'] = $dados_usuario['id_user'];
            header('Location: playlist.php');
        }
    }
?>