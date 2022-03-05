<?php
require_once("../model/model_bd.php");
class listarController{

    private $estoque;
    //chamao banco e instacia 
    public function __construct(){
        $this->estoque = new Banco();
        $this->criarTabela();
    }

    private function criarTabela(){
        $row = $this->estoque->getEstoque();
        if($row == true){
        foreach ($row as $value){
            echo "<tr>";
            echo "<th>".$value['pro_nome'] ."</th>";
            echo "<td>".$value['pro_quantidade'] ."</td>";
            echo "<td>".$value['pro_slotprateleira'] ."</td>";
            echo "<td> ".$value['pro_fabricante'] ."</td>";
            echo "<td> ".$value['pro_condicao'] ."</td>";
            echo "<td> ".$value['fi_nome'] ."</td>";
            echo "<td> ".$value['set_nome'] ."</td>";
            echo "<td><a href='view_update.php?id=".$value['id_produto']."'>Editar</a> | <a  href='../controller/controler_del.php?id=".$value['id_produto']."'>Excluir</a></td>";
            echo "</tr>";
        }
    }
    }
}