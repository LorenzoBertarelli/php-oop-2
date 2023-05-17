<?php
    require_once __DIR__ . "/../Models/Categories.php";
    require_once __DIR__ . "/../Models/Products.php";

    $Categories = [
        new Categories("Cani"),
        new Categories("Gatti")
    ];

    $Products = [
        new Products($Categories[0],"Carne in scatola","3,99€","img/cibo-in-scatola-cani.jpg"),
        new Products($Categories[1],"Pallina di Erba gatta","1,99€","img/pallina-erba-gatta.jpg"),
        new Products($Categories[0],"Cuccia Taglia Piccola","39,99€","img/cuccia-cani.jpg"),
        new Products($Categories[0],"Carne in scatola","3,99€","img/cibo-in-scatola-cani.jpg"),
        new Products($Categories[1],"Pallina di Erba gatta","1,99€","img/pallina-erba-gatta.jpg"),
        new Products($Categories[0],"Cuccia Taglia Piccola","39,99€","img/cuccia-cani.jpg"),
    ];
   
?>