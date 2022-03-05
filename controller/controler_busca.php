<?php
require_once("../model/model_bd.php");

class buscaController {

private $busca;
private $pro_nome;
private $id_produto;
private $pro_quantidade;
private $pro_slotprateleira;
private $pro_fabricante;
private $pro_condicao;
private $fi_cidade;
private $set_nome;
private $he_filial_id_filial;
private $he_setor_id_setor;


public function __construct($id){
    $this->busca = new Banco();
    $this->criarFormulario($id);
}
private function criarFormulario($id){
    $row = $this->busca->pesquisaMaterial($id);
    $this->pro_nome            =$row['pro_nome'];
    $this->id_produto          =$row['id_produto'];
    $this->pro_quantidade      =$row['pro_quantidade'];
    $this->pro_slotprateleira  =$row['pro_slotprateleira'];
    $this->pro_fabricante      =$row['pro_fabricante'];
    $this->pro_condicao        =$row['pro_condicao'];
    $this->fi_cidade           =$row['fi_cidade'];
    $this->set_nome            =$row['set_nome'];
    $this->he_filial_id_filial =$row['he_filial_id_filial'];
    $this->he_setor_id_setor   =$row['he_setor_id_setor'];

}

public function getPro_nome(){
    return $this->pro_nome;
}
public function getId_produto(){
    return $this->id_produto;
}
public function getPro_quantidade(){
    return $this->pro_quantidade;
}
public function getPro_slotprateleira(){
    return $this->pro_slotprateleira;
}
public function getPro_fabricante(){
    return $this->pro_fabricante;
}
public function getPro_condicao(){
    return $this->pro_condicao;
}
public function getFi_cidade(){
    return $this->fi_cidade;
}
public function getSet_nome(){
    return $this->set_nome;
}
public function getHe_filial_id_filial(){
    return $this->he_filial_id_filial;
}
public function getHe_setor_id_setor(){
    return $this->he_setor_id_setor;
}



}
$id = filter_input(INPUT_GET, 'id');
$busca = new buscaController ($id);


?>