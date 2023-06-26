<?php
    class PhpString {

        private $value;

        public function __construct($s=""){
            $this->isiTeks($s);
        }

        public function isiTeks($s){
            $this->value = $s;
        }

        public function teks(){
            return $this->value;
        }

        public function jumlahKarakter(){
            $text = trim($this->value);
            return strlen($text);
        }

        public function ambilKalimat($diAwal,$jumlah){
            $text = $this->value;
            return substr($text, $diAwal, $jumlah);
        }

        public function RandomUpperandLower(){
            $text = trim($this->value);
            for ($i=0; $i < strlen($text); $i++) { 
                if($i % 2 === 0){
                    print strtoupper($text[$i]);
                }else{
                    print strtolower($text[$i]);
                }
            }
        }
    }

    $teks = new PhpString();

    $teks->isiTeks("Hallo fadli selamat pagi");

    print $teks->RandomUpperandLower();

?>