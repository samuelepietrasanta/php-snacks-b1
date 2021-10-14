<!-- Creare un array contenente qualche alunno di un'ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->


<?php 

$classe = [
    [
        'nome' => "Mario",
        'cognome' => "Rossi",
        'voti' => [8,9,7,5,6,3 ]
    ],
    [
        'nome' => "Carla",
        'cognome' => "Arancioni",
        'voti' => [7,8,7,9,4,5]
    ],
    [
        'nome' => "Giacomo",
        'cognome' => "Gialli",
        'voti' => [8,2,9,7,6,4]
    ],
    [
        'nome' => "Ernesto",
        'cognome' => "Blu",
        'voti' => [9,9,8,7,9,10]
    ],
    [
        'nome' => "Mara",
        'cognome' => "Verdi",
        'voti' => [10,8,9,9,8,9]
    ]
]; ?>


    <div>

        <?php foreach($classe as $alunno){; ?>

            <h2>
                <?php echo($alunno['nome'])?>
                <?php echo($alunno['cognome']); ?>
                    
            </h2>

            <h3>Media voto:</h3>
        
            <?php $totale=0; ?>
        
            <?php foreach($alunno['voti'] as $voto){; ?>
<!-- L'ho fatto senza conoscere la funzione array_sum -->
                <?php $totale += $voto; ?>
            
            <?php }; ?>
            <?php echo($totale/(count($alunno['voti']))); ?>
        
        <?php }; ?>
        
    </div>

