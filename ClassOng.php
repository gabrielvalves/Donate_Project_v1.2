<?php


class Ong{

    public function registerOng($nomeOng, $resumoOng, $enderecoOng, $causaOng, $beneficOng, $cnpjOng, $telefoneOng, $emailOng, $facebookOng, $instagramOng, $descricaoOng){

        
        global $pdo; 

        $sql = "INSERT INTO ong(nomeOng, resumoOng, enderecoOng, causaOng, beneficOng, cnpjOng, telefoneOng, emailOng, facebookOng, instagramOng, descricaoOng) VALUES (:nomeOng, :resumoOng, :enderecoOng, :causaOng, :beneficOng, :cnpjOng, :telefoneOng, :emailOng, :facebookOng, :instagramOng, :descricaoOng)";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("nomeOng", $nomeOng); 
        $sql->bindValue("resumoOng", $resumoOng); 
        $sql->bindValue("enderecoOng", $enderecoOng); 
        $sql->bindValue("causaOng", $causaOng); 
        $sql->bindValue("beneficOng", $beneficOng); 
        $sql->bindValue("cnpjOng", $cnpjOng); 
        $sql->bindValue("telefoneOng", $telefoneOng); 
        $sql->bindValue("emailOng", $emailOng); 
        $sql->bindValue("facebookOng", $facebookOng); 
        $sql->bindValue("instagramOng", $instagramOng); 
        $sql->bindValue("descricaoOng", $descricaoOng); 
        try{
            $sql->execute();
            if($sql->rowCount() > 0){
                echo 'Ong cadastrada com sucesso!';
            }
        }catch(Exception $e){
            echo 'Erro!', $e->getMessage(), "\n";
        }
    }
}
