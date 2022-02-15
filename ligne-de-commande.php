<?php
    $avant = microtime(true);

     $chaine = ['s','sb','sbs','sbsb'];
     foreach ($chaine as $value){
        if(preg_match('`^((sb)*)+$`', $value))
        {
              echo 'Vrai, la chaîne '+ $value +'correspond au masque \n';
        }
        else
        {
            echo 'Faux, la chaîne ne correspond pas au masque \n';
        }}
     $après = microtime(true);
    
    var_dump($après - $avant);
?>