<!--  
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo.
-->

<?php 
$paragrafo = "Sul trono dei formaggi a pasta molle più venduti è consumati in Francia c’è una nuova regina: la mozzarella. Il latticino italiano ha infatti spodestato il camembert, sovrano incontrastato del regno del cacio per anni. A dirlo è Le Figaro, che cita i dati diffusi dal Syndicat normand des fabricants de camemberts (Snfc). Dall’inizio anno fino all'11 settembre sono state infatti vendute in Francia 29.230 tonnellate di camembert contro 33.170 tonnellate di mozzarella. E per la prima volta, spiega al quotidiano francese Fabrice Collier, presidente di Snfc, «la curva delle vendite di camembert, in costante calo del 3% annuo, è scesa al di sotto di quella delle vendite di mozzarella, che registra una crescita annua del 5%».
Mozzarella, più «facile» e trendy
Dietro ai numeri ci potrebbero essere i segnali di un cambiamento nelle abitudini alimentari dei francesi. Mozzarella e camembert, per quanto considerati entrambi formaggi a pasta molle, giocano in due categorie diverse, per così dire. Come spiega Collier il tipico prodotto della Normandia ha un gusto più deciso ed è più adatto a taglieri e piatti, consumati nei ristoranti o nei pasti casalinghi più formali, da grande occasione. La mozzarella è più fresca e versatile, viene usata anche in cucina (un esempio tra tutti, sulla pizza) ed è adatta a piatti più veloci da preparare e considerati più trendy.
I numeri dell’export
I cugini d’Oltralpe sono, comprensibilmente, preoccupati. «Negli anni Ottanta in Francia venivano prodotte 180.000 tonnellate di camembert, parte delle quali venivano esportate, il doppio di oggi», ricorda Fabrice Collier. Il sorpasso della mozzarella non è un buon segno per la produzione casearia francese, ma può fa la felicità delle aziende italiane. Che posso contare su un solido successo della mozzarella (compresa quella di bufala campana Dop) all’estero: si tratta infatti del formaggio italiano più esportato nel mondo, con più di 107mila to"; 
?>

<?php 
$paragrafoDiviso = explode("." , $paragrafo); 

?>


<?php foreach($paragrafoDiviso as $pezzetto){ ?>
    <p>
    
       <?php echo ($pezzetto); ?>
   
    </p>
<?php }; ?>