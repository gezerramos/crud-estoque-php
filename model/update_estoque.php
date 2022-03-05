<?php
require_once("model_bd.php");

class Up_est extends Banco {

   
    private $id_produto;
    private $pro_nome;
    private $pro_quantidade;
    private $pro_slotprateleira;
    private $pro_fabricante;


    public function setId_produto($string){
        $this->id_produto = $string;
    }
    public function getId_produto(){
        return $this->id_produto;
    }
    
    
    public function setPro_nome($string){
        $this->pro_nome = $string;
    }
    public function getPro_nome(){
        return $this->pro_nome;
    }
    
   
    public function setPro_quantidade($string){
        $this->pro_quantidade = $string;
    }
    public function getPro_quantidade(){
        return $this->pro_quantidade;
    }
    

    public function setPro_slotprateleira($string){
        $this->pro_slotprateleira = $string;
    }
    public function getPro_slotprateleira(){
        return $this->pro_slotprateleira;
    }
    

    public function setPro_fabricante($string){
        $this->pro_fabricante = $string;
    }
    public function getPro_fabricante(){
        return $this->pro_fabricante;
    }
    
 
  

    public function add_estoque(){
        return $this->updateEst($this->getPro_nome(),$this->getPro_quantidade(),$this->getPro_slotprateleira(),$this->getPro_fabricante(), $this->getId_produto());
  }
}
?>