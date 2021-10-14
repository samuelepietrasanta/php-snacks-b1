<!--  
    
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario, di 8 partite.
Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema : Olimpia Milano - Cantù | 55-60
-->
<?php 
$partite = [
    [
        'squadraCasa' => 'Milano',
        'squadraOspite' => 'Roma',
        'puntiCasa' => 80,
        'puntiOspite' => 86
    ],
    [
        'squadraCasa' => 'Viterbo',
        'squadraOspite' => 'Padova',
        'puntiCasa' => 56,
        'puntiOspite' => 76
    ],

    
]; ?>

<ul>
    <?php foreach($partite as $partita){ ?>
    
    <li><?php echo ($partita['squadraCasa'] . '-' . $partita['squadraOspite'] . ':  ' . $partita['puntiCasa'] . ' - ' . $partita['puntiOspite']); ?>
    </li>

    <?php }?>
    
</ul>

