<?php
//1. Sukurkite daugiamati masyva kuriame atsispindetu restorano meniu: gerimai,
// pagrindiniai patiekalai (griliaus/miltiniai patiekalai), desertai, uzkandziai.

$dishes = [
    'drinks' => ['cola', 'fanta', 'tea'],
    'main courses' => [
        [
            'steaks' => 'beef',
            'grilled vegetables' => 'vegetables',
            'grilled pork' => 'pork',
        ],
        [
            'pancakes' => 'pancake',
            'waffles' => 'chocolade waffles',
            'cupcakes' => 'cupcake',
        ],
    ],
    'desserts' => ['ice cream', 'cakes', 'pastries',],
    'snacks' => 'bread',
];


//2.Isveskite i ekrana visus Griliaus patiekalus ir desertus

foreach ($dishes['main courses'][0] as $dish) {
    print $dish . '<br>';
}
foreach ($dishes['desserts'] as $dish) {
    print $dish . '<br>';
}

//2. Sukurkite kaimo turizmo sodybu masyva (apsnekesime kas turetu atsispindeti jame)
//pagal regiona, reitinga, ir pan

$kaimo_turizmo_sodybos = [
    'Vilniaus' => [
        '*' => [
            'Latakuciai' => [
                'sodybos_id' => 1,
                'sodybos_pavadinimas' => 'Latakuciai',
                'sodybos_adresas' => 'Latakuciu km. 2',
                'namuku_skaicius' => 3,
                'miegamos_vietos' => 12,
                'pirtis' => true,
                'pirties_talpa' => 10,
                'kubilas' => true,
            ],
        ],
        '**' => [
            'Nemunėlio' => [
                'sodybos_id' => 2,
                'sodybos_pavadinimas' => 'Nemunėlio',
                'sodybos_adresas' => 'Kauno raj. 15',
                'namuku_skaicius' => 1,
                'miegamos_vietos' => 5,
                'pirtis' => false,
                'pirties_talpa' => 0,
                'kubilas' => false,
            ],
        ],
        '***' => [
            'Vasaros' => [
                'sodybos_id' => 3,
                'sodybos_pavadinimas' => 'Vasaros',
                'sodybos_adresas' => 'Vilniaus g. 33',
                'namuku_skaicius' => 4,
                'miegamos_vietos' => 10,
                'pirtis' => true,
                'pirties_talpa' => 10,
                'kubilas' => true,
            ],
        ],
        '****' => [
            'Žvaigždyno' => [
                'sodybos_id' => 4,
                'sodybos_pavadinimas' => 'Žvaigždyno',
                'sodybos_adresas' => 'Vasaros g. 56',
                'namuku_skaicius' => 6,
                'miegamos_vietos' => 23,
                'pirtis' => true,
                'pirties_talpa' => 20,
                'kubilas' => true,
            ],
        ],
        '*****' => [
            'Dangaus' => [
                'sodybos_id' => 5,
                'sodybos_pavadinimas' => 'Dangaus',
                'sodybos_adresas' => 'Drujos g. 56',
                'namuku_skaicius' => 10,
                'miegamos_vietos' => 35,
                'pirtis' => true,
                'pirties_talpa' => 30,
                'kubilas' => true,
            ],
        ],
    ],
    'Kauno' => [
        '*' => [
            'Kazio' => [
                'sodybos_id' => 6,
                'sodybos_pavadinimas' => 'Kazio',
                'sodybos_adresas' => 'Karjero g. 3',
                'namuku_skaicius' => 5,
                'miegamos_vietos' => 8,
                'pirtis' => true,
                'pirties_talpa' => 8,
                'kubilas' => true,
            ],
        ],
        '**' => [
            'Rotušės' => [
                'sodybos_id' => 7,
                'sodybos_pavadinimas' => 'Rotušės',
                'sodybos_adresas' => 'Lampedziu km. 15',
                'namuku_skaicius' => 2,
                'miegamos_vietos' => 6,
                'pirtis' => false,
                'pirties_talpa' => 0,
                'kubilas' => false,
            ],
        ],
        '***' => [
            'Upelio' => [
                'sodybos_id' => 8,
                'sodybos_pavadinimas' => 'Upelio',
                'sodybos_adresas' => 'Voveres g. 33',
                'namuku_skaicius' => 4,
                'miegamos_vietos' => 10,
                'pirtis' => true,
                'pirties_talpa' => 10,
                'kubilas' => true,
            ],
        ],
        '****' => [
            'Miško' => [
                'sodybos_id' => 9,
                'sodybos_pavadinimas' => 'Miško',
                'sodybos_adresas' => 'Misko g. 1',
                'namuku_skaicius' => 3,
                'miegamos_vietos' => 12,
                'pirtis' => true,
                'pirties_talpa' => 12,
                'kubilas' => true,
            ],
        ],
        '*****' => [
            'Algimanto' => [
                'sodybos_id' => 10,
                'sodybos_pavadinimas' => 'Algimanto',
                'sodybos_adresas' => 'Drugelio g. 5',
                'namuku_skaicius' => 20,
                'miegamos_vietos' => 100,
                'pirtis' => true,
                'pirties_talpa' => 100,
                'kubilas' => true,
            ],
        ],
    ],
];


//1. Atspausdinkite visas Kauno sodybas leteleje kurios turi 3*
foreach ($kaimo_turizmo_sodybos['Kauno']['***'] as $sodybos) {
    print $sodybos['sodybos_pavadinimas'] . '<br><br>';
}
//2. Atspausdinkite visu sodybu pavadinimus.

foreach ($kaimo_turizmo_sodybos as $regionai) {
    foreach ($regionai as $reitingas) {
        foreach ($reitingas as $sodybos) {
            var_dump($sodybos['sodybos_pavadinimas']);
        }
    }
}


//3. Atspausdinkite visus duomenis sodybos 'Algimanto'
foreach ($kaimo_turizmo_sodybos['Kauno']['*****']['Algimanto'] as $sodybos) {
    print $sodybos;
}

//4. Isvardampinkit visas sodybas kurios turi 20< miegamu vietu.
foreach ($kaimo_turizmo_sodybos as $regionai) {
    foreach ($regionai as $reitingas) {
        foreach ($reitingas as $sodybos) {
            if ($sodybos['miegamos_vietos'] > 20) {
                var_dump($sodybos);
            }
        }
    }
}
print '<br><br>';
//5. Isvardampinkite visas sodybas kurios turi pirtis.

foreach ($kaimo_turizmo_sodybos as $regionai) {
    foreach ($regionai as $reitingas) {
        foreach ($reitingas as $sodybos) {
            if ($sodybos['pirtis'] === true) {
                var_dump($sodybos);
            }
        }
    }
}

?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Sodybos</title>
    <style>
        table, td{
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <td>sodybos_id</td>
        <td>sodybos_pavadinimas</td>
        <td>sodybos_adresas</td>
        <td>namuku_skaicius</td>
        <td>miegamos_vietos</td>
        <td>pirtis</td>
        <td>pirties_talpa</td>
        <td>kubilas</td>
    </tr>
    <?php foreach ($kaimo_turizmo_sodybos['Kauno']['***'] as $sodybos):?>
    <tr>
        <td><?php print $sodybos['sodybos_id']; ?></td>
        <td><?php print  $sodybos['sodybos_pavadinimas']; ?></td>
        <td><?php print $sodybos['sodybos_adresas']; ?></td>
        <td><?php print $sodybos['namuku_skaicius']; ?></td>
        <td><?php print  $sodybos['miegamos_vietos']; ?></td>
        <td><?php print  $sodybos['pirtis']; ?></td>
        <td><?php print  $sodybos['pirties_talpa']; ?></td>
        <td><?php print $sodybos['kubilas']; ?></td>
    </tr>
    <?php endforeach;?>
</table>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>
</html>


