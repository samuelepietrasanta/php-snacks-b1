<!-- Creare un array con 15 numeri casuali, 
tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->


<?php 
    
        
    $myArray = [];
    $numeroUtente = $_GET["numero"];
    /* per funzionare gli serve la querystring 'numero' perché ho svolto anche la richiesta successiva:
    "ora modificalo in modo tale che non contenga nessun multiplo del numero passato come querystring dall'utente" */
    
    while(count($myArray) < 15){
        $number = rand(1,100);
        if(!in_array($number, $myArray) && ! ($number % $numeroUtente) == 0){
            array_push($myArray, $number);
        }
    };

    echo
        '<pre>' ;
    print_r($myArray);
    echo '</pre>';
; ?>