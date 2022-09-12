<?php
    $classe = [
                [
                    "nome" => 'Andrea',
                    "cognome" => 'Bianchi',
                    "voti" =>   [
                                    6,
                                    8,
                                    7,
                                    6,
                                ]
                ],
                [
                    "nome" => 'Mario',
                    "cognome" => 'Rossi',
                    "voti" =>   [
                                    10,
                                    7,
                                    6,
                                    5,
                                ]
                ],
                [
                    "nome" => 'Tommaso',
                    "cognome" => 'Verdi',
                    "voti" =>   [
                                    2,
                                    3,
                                    5,
                                    1,
                                ]
                ],
                [
                    "nome" => 'Elisa',
                    "cognome" => 'Forti',
                    "voti" =>   [
                                    10,
                                    6,
                                    9,
                                    6,
                                ]
                ],
                [
                    "nome" => 'Giuseppe',
                    "cognome" => 'Fortunato',
                    "voti" =>   [
                                    3,
                                    4,
                                    8,
                                    9,
                                ]
                ],
    ];

    function mediaVoti($primoVoto, $secondoVoto, $terzoVoto, $quartoVoto, $numeroVoti) {
        return ($primoVoto + $secondoVoto + $terzoVoto + $quartoVoto) / $numeroVoti;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php 
            for ($i = 0; $i < count($classe); $i++) {
                $alunno = $classe[$i];
                
                $nome = $alunno['nome'];
                $cognome = $alunno['cognome'];
        
                $voti = $alunno['voti'];
                $mediaVoti = mediaVoti($voti[0], $voti[1], $voti[2], $voti[3], 4);

                echo "<span style='font-size: 2rem;'> $nome </span>";
                echo "<span style='font-size: 2rem;'> $cognome: </span> <span style='font-size: 1.5rem;'> $mediaVoti </span> <br>";
            }
        ?>
    </div>
</body>
</html>


