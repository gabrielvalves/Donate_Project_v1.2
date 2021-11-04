<?php

class Donate
{
    public function addDonation($nomeDonate, $descriDonate, $initDonate, $finDonate, $arrDonate1, $arrDonate2, $arrDonate3, $arrDonate4, $arrDonate5)
    {

        global $pdo;

        $sql = "INSERT INTO donate(nomeDonate, descriDonate, initDonate, finDonate, arrDonate1, arrDonate2, arrDonate3, arrDonate4, arrDonate5) VALUES (:nomeDonate, :descriDonate, :initDonate, :finDonate, :arrDonate1, :arrDonate2, :arrDonate3, :arrDonate4, :arrDonate5)";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("nomeDonate", $nomeDonate);
        $sql->bindValue("descriDonate", $descriDonate);
        $sql->bindValue("initDonate", $initDonate);
        $sql->bindValue("finDonate", $finDonate);
        $sql->bindValue("arrDonate1", $arrDonate1);
        $sql->bindValue("arrDonate2", $arrDonate2);
        $sql->bindValue("arrDonate3", $arrDonate3);
        $sql->bindValue("arrDonate4", $arrDonate4);
        $sql->bindValue("arrDonate5", $arrDonate5);
        try {
            $sql->execute();
            if ($sql->rowCount() > 0) {
                header("Location: donateAdd.html");
            }
        } catch (Exception $e) {
            echo 'Erro!', $e->getMessage(), "\n";
        }
    }
}
