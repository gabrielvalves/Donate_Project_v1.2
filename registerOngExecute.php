<?php
    if(isset($_POST['nomeOng']) && !empty($_POST['nomeOng']) && isset($_POST['resumoOng']) && !empty($_POST['resumoOng'])){
        
        if(isset($_POST['enderecoOng']) && !empty($_POST['enderecoOng']) && isset($_POST['causaOng']) && !empty($_POST['causaOng'])){
      
            if(isset($_POST['beneficOng']) && !empty($_POST['beneficOng']) && isset($_POST['cnpjOng']) && !empty($_POST['cnpjOng'])){
               
                if(isset($_POST['telefoneOng']) && !empty($_POST['telefoneOng']) && isset($_POST['emailOng']) && !empty($_POST['emailOng'])){
                    
                    if(isset($_POST['facebookOng']) && !empty($_POST['facebookOng']) && isset($_POST['instagramOng']) && !empty($_POST['instagramOng'])){
                        
                        if(isset($_POST['descricaoOng']) && !empty($_POST['descricaoOng'])){

                            try{

                                require '../Donate_Project_v1.2/connection.php';
                                require '../Donate_Project_v1.2/ClassOng.php';

                                $o = new Ong();

                                $nomeOng = $_POST['nomeOng'];
                                $resumoOng = $_POST['resumoOng'];
                                $enderecoOng = $_POST['enderecoOng'];
                                $causaOng = $_POST['causaOng'];
                                $beneficOng = $_POST['beneficOng'];
                                $cnpjOng = $_POST['cnpjOng'];
                                $telefoneOng = $_POST['telefoneOng'];
                                $emailOng = $_POST['emailOng'];
                                $facebookOng = $_POST['facebookOng'];
                                $instagramOng = $_POST['instagramOng'];
                                $descricaoOng = $_POST['descricaoOng'];

                                $o->registerOng($nomeOng, $resumoOng, $enderecoOng, $causaOng, $beneficOng, $cnpjOng, $telefoneOng, $emailOng, $facebookOng, $instagramOng, $descricaoOng);
                            }catch(Exception $e){
                                echo 'Verifique o erro!', $e->getMessage(), "\n";
                            }
                        }
                    }
                }
            }
        }
    }
