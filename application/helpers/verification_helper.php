<?php 
    function verify_login ($nom,$mdp,$data){
        for($i=0;$i<count($data);$i++){            
            if ($nom == $data[$i]['nom'] && $mdp == $data[$i]['mdp']){                
                return $data[$i]['iduser'];
            }
        }
        return 0;
    }
    function verify_sign ($pass,$mdp){
        if ($mdp == $pass){			
            return 0;
		}else {
            return 1;
		}
    }
?>