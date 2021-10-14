<!-- Utilizzare questo array: https://pastebin.com/CkX3680A
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio 
e i PM in un rettangolo verde. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>

    <div class="grey">
        <ul>
                <?php foreach($db['teachers'] as $teacher) {?>
                    <li><?php echo $teacher['name'] . $teacher['lastname']; ?>
                    </li>

                <?php }; ?>
        </ul>
    </div>

    <div class="green">
        <ul>
            <?php foreach($db['pm'] as $singlepm){ ?>
                <li><?php echo $singlepm['name'] . $singlepm['lastname'] ; ?>
                </li>

            <?php }; ?>
            
            
        </ul>
    </div>


    
</body>
</html>


