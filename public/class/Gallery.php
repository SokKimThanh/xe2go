<?php 
    class Image{
        public $name;
        public $url;
        public $lastModified;

        public function __construct($name, $url, $lastModified){
            $this->name = $name;
            $this->url = $url;
            $this->lastModified = $lastModified;
        }

        public function getCard(){

        }
    }
?>