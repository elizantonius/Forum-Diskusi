<?php

    defined('BASEPATH') or exit ('No direct script access allowed');
    
    class Jumlah extends CI_Controller{
        
        public function index(){

        }

        public function __construct(){
        $nilai1 = 12;
        $nilai2 = 12;
        $hasil = $nilai1 + $nilai2;

		echo "Penjumlahan dari $nilai1 + $nilai2 = ".$hasil;
		echo "<br>";

		}

		public function bilgal(){

		for($i=1;$i<=100;$i++){
			if($i % 2 == 1){
				echo "<br>".$i;
			}
		}
		}
    }
?>
