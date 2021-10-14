<!-- Passare come parametri GET name, mail e age e verificare
(cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e 
che age sia un numero. 
Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->


<?php 

$data= $_GET;

if (empty($_GET['name']) || empty($_GET['mail']) || empty($_GET['age']) ){
    echo 'Errore';
}else if (strlen($_GET['name'] < 3)){
    echo 'ACCESO NEGATO';
}else if(strpos($_GET['mail'], '@') === 'false' || strpos($_GET['mail'], '') === 'false'){
    echo 'ACCESSO NEGATO';
}else if(!is_numeric($_GET['age'])){
    echo 'ACCESSO NEGATO';
}else{
    echo ' ACCESSO RIUSCITO';
}
; ?>
