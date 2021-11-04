<?php
if (isset($_POST['nomeDonate']) && !empty($_POST['nomeDonate']) && isset($_POST['descriDonate']) && !empty($_POST['descriDonate'])) {
    
    if (isset($_POST['initDonate']) && !empty($_POST['initDonate']) && isset($_POST['finDonate']) && !empty($_POST['finDonate'])) {
        
        if (isset($_POST['arrDonate1']) && !empty($_POST['arrDonate1']) && isset($_POST['arrDonate2']) && !empty($_POST['arrDonate2'])) {
            
            if (isset($_POST['arrDonate3']) && !empty($_POST['arrDonate3']) && isset($_POST['arrDonate4']) && !empty($_POST['arrDonate4'])) {

                if (isset($_POST['arrDonate5']) && !empty($_POST['arrDonate5'])){

                    try{
                        require '../Donate_Project_v1.2/connection.php';
                        require '../Donate_Project_v1.2/ClassDonation.php';
                        

                        $d = new Donate(); 

                        $nomeDonate = $_POST['nomeDonate'];
                        $descriDonate = $_POST['descriDonate'];
                        $initDonate = $_POST['initDonate']; 
                        $finDonate = $_POST['finDonate'];
                        $arrDonate1 = $_POST['arrDonate1'];
                        $arrDonate2 = $_POST['arrDonate2'];
                        $arrDonate3 = $_POST['arrDonate3'];
                        $arrDonate4 = $_POST['arrDonate4'];
                        $arrDonate5 = $_POST['arrDonate5'];

                        $d->addDonation($nomeDonate, $descriDonate, $initDonate, $finDonate, $arrDonate1, $arrDonate2, $arrDonate3,$arrDonate4, $arrDonate5);
                    }catch(Exception $e){
                        echo 'Verifique o erro!', $e->getMessage(), "\n";

                    }
                }
            }
        }
    }
}
