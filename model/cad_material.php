<?php
require_once("model_bd.php");

class Cadastro extends Banco {

    private $pro_nome;
    private $pro_quantidade;
    private $pro_slotprateleira;
    private $pro_fabricante;
    private $pro_condicao;
    private $he_filial_id_filial;
    private $he_setor_id_setor;


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

    public function setPro_condicao($string){
        $this->pro_condicao = $string;
    }
    public function getPro_condicao(){
        return $this->pro_condicao;
    }

    public function setHe_filial_id_filial($string){
        $this->he_filial_id_filial = $string;
    }
    public function getHe_filial_id_filial(){
        return $this->he_filial_id_filial;
    }

    public function setHe_setor_id_setor($string){
        $this->he_setor_id_setor = $string;
    }
    public function getHe_setor_id_setor(){
        return $this->he_setor_id_setor;
    }
  

    public function add_estoque(){
        return $this->setMaterial($this->getPro_nome(),$this->getPro_quantidade(),$this->getPro_slotprateleira(),$this->getPro_fabricante(),$this->getPro_condicao(),$this->getHe_filial_id_filial(),$this->getHe_setor_id_setor());
  }
}
?>