<?php

require_once __DIR__ . "/../Trait/PriceTrait.php";

    class Products {
        public $category;
        public $name;
        private $price;
        public $image;

        function __construct(Categories $_category ,$_name, $_price, $_image) {
            $this->category = $_category;
            $this->name = $_name;
            $this->price = $_price;
            $this->image = $_image;
        }

        use PriceTrait;
    }
?>