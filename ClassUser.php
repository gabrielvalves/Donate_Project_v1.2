<?php

class Usuario
{


    public function doLogin($email, $senha)
    {
        global $pdo;

        $sql = "SELECT * FROM usuarios WHERE emailUser = :emailUser AND senhaUser = :senhaUser";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("emailUser", $email);
        $sql->bindValue("senhaUser", $senha);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $info = $sql->fetch();

            $_SESSION['idUser'] = $info['id'];


            return true;
        } else {
            return false;
        }
    }


    public function doRegisterUser($nome, $email, $senha, $endereco)
    {

        global $pdo;

        $sql = "INSERT INTO usuarios(nomeUser, senhaUser, emailUser, enderecoUser) VALUES(:nomeUser, :emailUser, :senhaUser, :enderecoUser)";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("nomeUser", $nome);
        $sql->bindValue("emailUser", $email);
        $sql->bindValue("senhaUser", $senha);
        $sql->bindValue("enderecoUser", $endereco);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            echo 'Usuário cadastrado com sucesso';
        } else {
            echo 'Houve um erro no registro';
        }
    }
}
