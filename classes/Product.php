<?php 

    class Product {

        private $barcode;
        private $category;
        private $price;
        private $brend;
        private $description;
        private $img;
        private $discount;

        //costruttore è sempre pubblico, quindi non lo specifico
        function __construct($barcode, $category, $price, $brend, $description = "", $img = "percorso-assoluto.jpg", $discount = 0){
            $this->barcode = $barcode;
            $this->category = $category;
            $this->price = $price;
            $this->brend = $brend;
            $this->description = $description;
            $this->img = $img;
            $this->discount = $discount;
        }

        //metodi
        public function setBarcode($barcode) {
            $this->barcode = $barcode;
        }

        public function getBarcode() {
           return $this->barcode;
        }

        public function setDiscount ($discount) {
            $this->discount = $discount;
        }

        public function getDiscount() {
           return $this->discount;
        }


    }

$description1 = "HP 250 G8 DDR4-SDRAM Computer portatile 39,6 cm (15.6') 1920 x 1080 Pixel Intel® Core™ i3 di undicesima generazione 8 GB 256 GB SSD Wi-Fi 6 (802.11ax) Windows 10 Home Argento";
$prod1 = new Product ("123CD157", "Informatica", 500, "HP", $description1); 
var_dump($prod1);

//$prod1->setBarcode("AAAAAAAA");
//var_dump($prod1);

//echo $prod1->getBarcode("AAAAAAA");
//echo $prod1->barcode; ERROR mperchè non posso accede alla proprietà $barcode in quanto è private

