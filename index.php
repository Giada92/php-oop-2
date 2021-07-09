<?php 

    require_once __DIR__ . "/classes/Product.php";
    require_once __DIR__ . "/classes/User.php";

    $description1 = "HP 250 G8 DDR4-SDRAM Computer portatile 39,6 cm (15.6') 1920 x 1080 Pixel Intel® Core™ i3 di undicesima generazione 8 GB 256 GB SSD Wi-Fi 6 (802.11ax) Windows 10 Home Argento";
    $img1_url ="https://static1.unieuro.it/medias/sys_master/root/h0a/h00/32752489562142/-api-rest-00ed29448a7522f610cac04d7b9ea7e0-assets-8002aec60b0fd03187900d5df21565a0-preview-sgmConversionBaseFormat-sgmProductFormat.jpg";
    $prod1 = new Product ("123CD157", "Informatica", 500, "HP", $description1, $img1_url);
    $prod1->setDiscount(65);
    $prod2 = new Product ("BBBBBBB", "Informatica", 400, "LENOVO");
    //var_dump($prod2);

    /* $Products = [
        $prod1 = new Product ("123CD157", "Informatica", 500, "HP", $description1, $img1_url),
        $prod2 = new Product ("BBBBBBB", "Informatica", 400, "LENOVO")
    ];
    var_dump($Products); */

    $user1 = new User ("Gianluigi", "Rossi", 30);
    $user1->setPassword("Qualcosa");
    $user1->setEmail("neri@gmail.com");
    //var_dump($user1);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Seconda OOP</title>
    </head>
    <body>

        <header>
            <h2>
                Benvenuto: 
                    <?php echo $user1->getName() . " " . $user1->getLastname(); ?>
            </h2>
        </header>

        <main>
            <img src="<?= $prod1->getImg(); ?>" alt="">
            <p><?= $prod1->getBarcode(); ?></p>
            <p><?= $prod1->setDescription(); ?></p>
            <p>
               <strong><?= $prod1->getPrice(); ?></p></strong>
        </main>
        
    </body>
</html>