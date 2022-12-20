<?php

//Includo nell'index le classi collegate alla classe principale prodotto.

include_once __DIR__ . '/classi/category.php';
include_once __DIR__ . '/classi/cibo.php';
include_once __DIR__ . '/classi/accessori.php';
include_once __DIR__ . '/classi/giocattoli.php';

//Includo user con il traits al suo interno address
include_once __DIR__ . '/classi/user.php';

$category =[
     'cane'=> new Category('Cane ', '<i class="fa-solid fa-dog"></i>'),
     'gatto'=> new Category('Gatto ', '<i class="fa-solid fa-cat"></i>'),
     'uccello'=> new Category('Uccello ', '<i class="fa-solid fa-crow"></i>')
];

// var_dump($category);

$prodotti = [
    new Cibo('Royal Canin', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0_N4MtKApkv7sZnAw0S63sszV7Uer4yvmjw&usqp=CAU', $category['cane'], 43.99, 545, 'prosciutto, riso'),
    new Cibo('Almo Nature', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxgUBm07eKQiHF3AN1FXl4vNb7hzSsacO3QQ&usqp=CAU', $category['cane'], 44.99, 600, 'manzo, cereali'),
    new Accessori('Voliera Ferplast Bella Casa', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQN6C5GNDkKqlGw7hrUGHBS_9E5fVeqXRkZDQ&usqp=CAU', $category['uccello'], 184.99, 'Legno', 'M: L 83 x P 67 x H 153 cm'),
    new Giocattoli('Topini di Peluche TRIXIE', 'https://shop-cdn-m.mediazs.com/bilder/topini/di/peluche/trixie/7/400/42535_pla_trixie_plueschmaus_grau_und_weiss_ret_01_7.jpg', $category['gatto'], 4.99, 'Morbido con codina in corda', '8,5cm x 10cm')
];

// var_dump($prodotti);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bool Shop</title>
    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <div class=" w-75 m-auto">
        <h1>BoolShop</h1>
        <h3>I nostri prodotti</h3>
        <div class="row justify-content-between">
            <?php
            foreach ($prodotti as $card) {
                //Attivo metodi contenuti in cibo.php accessori.php e giocattoli.php che stampa card dinamiche
                $card->displayProjectCard();
            }
            ?>
        </div>
    </div>

    <!-- TEST USER -->
    <?php

    $user = new User('Alex', 'melecarmine@gmail.com');

    $user->street = 'Via Pinco Pallino';

    //Stampare gli errori sottoforma di eccezioni
    try{
        $user->setEta('venti');
    }
    catch(Exception $e){
        echo 'Si è verificato un errore: ' . $e->getMessage();
    }

    var_dump($user);

    ?>

    <!-- Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>