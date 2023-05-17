<?php
    require_once __DIR__ . "/Models/Categories.php";
    require_once __DIR__ . "/Models/Products.php";

    $Categories = [
        $Cani = new Categories("Cane"),
        $Gatti = new Categories("Gatto")
    ];

    $Products = [
        $Product1 = new Products("Carne in scatola"),
        $Product2 = new Products("", "Pallina"),
        $Product3 = new Products("","","Cuccia Taglia Piccola")
    ];
   
?>