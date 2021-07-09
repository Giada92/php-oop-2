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

        public function getPrice() {
            return $this->price . ",00 Euro";
         }

        public function getDescription() {
            return $this->description;
        }

        public function setDescription() {
            if(strlen($this->description) > 55){
                return substr($this->description, 0, 55) . ".";
            }else {
                return $this->description;
            }
        }

        public function getImg(){
            return $this->img;
        }

        public function setDiscount ($eta) {
            if($eta >= 60){
                $this->discount = 30;
            }
        }

        public function getDiscount() {
           return $this->discount;
        }
    }

/* $description1 = "HP 250 G8 DDR4-SDRAM Computer portatile 39,6 cm (15.6') 1920 x 1080 Pixel Intel® Core™ i3 di undicesima generazione 8 GB 256 GB SSD Wi-Fi 6 (802.11ax) Windows 10 Home Argento";
$img1_url ="https://static1.unieuro.it/medias/sys_master/root/h0a/h00/32752489562142/-api-rest-00ed29448a7522f610cac04d7b9ea7e0-assets-8002aec60b0fd03187900d5df21565a0-preview-sgmConversionBaseFormat-sgmProductFormat.jpg";
$prod1 = new Product ("123CD157", "Informatica", 500, "HP", $description1, $img1_url); 
$prod1->setDiscount(65); */
//var_dump($prod1);

//$prod1->setBarcode("AAAAAAAA");
//var_dump($prod1);

//echo $prod1->getBarcode("AAAAAAA");
//echo $prod1->barcode; ERROR perchè non posso accede alla proprietà $barcode in quanto è private

