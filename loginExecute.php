<?php

if(isset($_POST['emailUser']) && !empty($_POST['emailUser']) && isset($_POST['senhaUser']) && !empty($_POST['senhaUser'])){

    require '../Donate_Project_v1.2/connection.php';
    require '../Donate_Project_v1.2/ClassUser.php';

    $u = new Usuario();

    $email = addslashes($_POST['emailUser']);
    $senha = addslashes($_POST['senhaUser']);

    if($u->doLogin($email,$senha) == true){
        if(isset($_SESSION['idUser'])){
            header("Location: index.php");
            exit();
        }else{
            header('Location: login.html');
        }

    }else{
        header('Location: login.html');
    }

}else{
    header('Location: login.html');
}
