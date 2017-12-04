<?php
    session_start();
   echo $route = $_POST["route"];

    //Iniciar SESSION in PHP
    if($route == 'startSession'){
        $uid = $_POST["uid"];
        if(isset($uid)){
            //ESTA DEFINIDO
            if($uid == ""){
                //Pero vacío...
            }else{
                //TODO OK...
                $_SESSION['UserSession'] = $uid;
            }
        }else{
            //No está definido...
        }

    }

    if($route == 'signOut'){
        session_destroy();
    }    
?>