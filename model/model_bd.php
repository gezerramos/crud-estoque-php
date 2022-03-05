<?php

require_once("../config.php");
class Banco{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
      
    }

   //pegar Estoque todos
   public function getEstoque(){
       
    $result = $this->mysqli->query("SELECT * FROM he_produto as c1
    inner join he_filial as c2 on c1.he_filial_id_filial = c2.id_filial
    inner join he_setor as c3 on c1.he_setor_id_setor = c3.id_setor;");
    while($row = $result->fetch_array(MYSQLI_ASSOC)){
        $array[] = $row;
    }
    return @$array;

}

//cadasatrar novo material
public function setMaterial($pro_nome, $pro_quantidade, $pro_slotprateleira, $pro_fabricante, $pro_condicao, $he_filial_id_filial, $he_setor_id_setor){
echo $pro_nome;
echo $pro_quantidade;
echo $pro_slotprateleira;

    $stmt = $this->mysqli->prepare("INSERT INTO he_produto (`pro_nome`, `pro_quantidade`, `pro_slotprateleira`, `pro_fabricante`, `pro_condicao`, `he_filial_id_filial`, `he_setor_id_setor`) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $pro_nome, $pro_quantidade, $pro_slotprateleira, $pro_fabricante, $pro_condicao, $he_filial_id_filial, $he_setor_id_setor);
    
     if( $stmt->execute() == TRUE){
        return true ;
    }else{
        return false;
    }

}

//deletar material

public function delMaterial($id){
    if($this->mysqli->query("DELETE FROM he_produto WHERE id_produto = '".$id."';")== TRUE){
        return true;
    }else{
        return false;
    }

}


//pesquisa material

public function pesquisaMaterial($id){
    
    $result = $this->mysqli->query("SELECT * FROM he_produto as c1
    inner join he_filial as c2 on c1.he_filial_id_filial = c2.id_filial
    inner join he_setor as c3 on c1.he_setor_id_setor = c3.id_setor
    WHERE id_produto='$id'");
    return $result->fetch_array(MYSQLI_ASSOC);

}

//update material


public function updateEst($pro_nome, $pro_quantidade, $pro_slotprateleira, $pro_fabricante, $id_produto){
    $stmt = $this->mysqli->prepare("UPDATE `he_produto` SET `pro_nome` = ?, `pro_quantidade` = ?, `pro_slotprateleira` = ?, `pro_fabricante` = ? WHERE `id_produto` = ?");

        
    $stmt->bind_param("sssss",$pro_nome,$pro_quantidade,$pro_slotprateleira,$pro_fabricante,$id_produto);
    if($stmt->execute()==TRUE){
        return true;
    }else{
        return false;
    }
}


}
?>