<?php
    require_once __DIR__ . "/Models/Categories.php";
    require_once __DIR__ . "/Models/Products.php";

    $Product1 = new Products("Carne in scatola");
    $Product2 = new Products("", "Pallina");
    $Product3 = new Products("","","Cuccia Taglia Piccola");

    var_dump($Product1);
    var_dump($Product2);
    var_dump($Product3);

?>