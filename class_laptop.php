<?php
class Laptop{
    
   // cara membuat property
    
    // jenis encapsulation public, private, protected
    
    public $merk;
    public $type;
    
    // cara membuat method
    
    public function hidup(){
        return 'Laptop '.$this->merk.' '.$this->type.' Sudah Hidup';
    }
    
    public function mati(){
        return 'Laptop '.$this->merk.' '.$this->type.' Sudah Mati';
    }
    
    // contoh method Setter
    public function setMerk($Namamerk){
        $this->merk=$Namamerk;
    }
    
    // contoh method Getter
    public function getMerk(){
        return $this->merk;
    }
    
}