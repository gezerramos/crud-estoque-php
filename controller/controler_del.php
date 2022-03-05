<?php
require_once("../model/model_bd.php");
class deleta {
    private $deleta;

    public function __construct($id){
        $this->deleta = new Banco();
        if($this->deleta->delMaterial($id)== TRUE){
            echo "<script>alert('Registro deletado com sucesso!');document.location='../view/listar_view.php'</script>";
        }else{
            echo "<script>alert('Erro ao deletar registro!');history.back()</script>";
        }
    }
}
new deleta($_GET['id']);
?>