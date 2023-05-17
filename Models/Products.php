<?php
    
    class Products {
        public $cibi;
        public $giochi;
        public $cucce;

        function __construct($_cibi = "", $_giochi = "", $_cucce = "") {
            $this->cibi = $_cibi;
            $this->giochi = $_giochi;
            $this->cucce = $_cucce;
        }
    }

?>