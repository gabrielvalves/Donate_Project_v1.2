<?php

if (isset($_POST['nomeUser']) && !empty($_POST['nomeUser']) && isset($_POST['senhaUser']) && !empty($_POST['senhaUser'])) {

    if (isset($_POST['emailUser']) && !empty($_POST['emailUser']) && isset($_POST['enderecoUser']) && !empty($_POST['enderecoUser'])) {

        require '../Donate_Project_v1.2/connection.php';
        require '../Donate_Project_v1.2/ClassUser.php';

        $u = new Usuario();

        $nome = addslashes($_POST['nomeUser']);
        $senha = addslashes($_POST['senhaUser']);
        $email = addslashes($_POST['emailUser']);
        $endereco = addslashes($_POST['enderecoUser']);

        if ($u->doRegisterUser($nome, $senha, $email, $endereco) == true) {
            if (isset($_SESSION['idUser'])) {
                header('Location: index.php');
            } else {
                header('Location: registerUser.html');
            }
        } else {
            header('Location: registerUser.html');
        }
    }
}
