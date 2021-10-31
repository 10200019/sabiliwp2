<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Review_Sepatu extends CI_model
{
    
     public $harga;
     public function proses($data)
   {
     if($data =="nike") {
        $this->harga =375000;
       } elseif ($data == "adidas") {
          $this->harga = 30000;
       } elseif ($data == " Kickers") {
          $this->harga = 250000;
       } elseif ($data == "Eiger") {
          $this->harga = 275000;
       } else  {
          $this->harga = 400000;
          }

       return$this->harga;

    }    
                                                                                        
}

