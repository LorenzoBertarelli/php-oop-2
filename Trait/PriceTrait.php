<?php
    trait PriceTrait {
        private $price;
    
        public function getPrice() {
            if ($this->price <= 0) {
                throw new Exception("Il prezzo deve essere maggiore di 0");
            }
            return $this->price;
        }
    
        public function setPrice($price) {
            if ($this->price <= 0) {
                throw new Exception("Il prezzo deve essere maggiore di 0");
            }
            $this->price = $price;
        }
    }
?>