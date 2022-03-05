<?php
require_once("../model/cad_material.php");
class cadastroController{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Cadastro();
        $this->add_estoque();
    }

    private function add_estoque(){
        $this->cadastro->setPro_nome($_POST['pro_nome']);
        $this->cadastro->setPro_quantidade($_POST['pro_quantidade']);
        $this->cadastro->setPro_slotprateleira($_POST['pro_slotprateleira']);
        $this->cadastro->setPro_fabricante($_POST['pro_fabricante']);
        $this->cadastro->setPro_condicao($_POST['pro_condicao']);
        $this->cadastro->setHe_filial_id_filial($_POST['he_filial_id_filial']);
        $this->cadastro->setHe_setor_id_setor($_POST['he_setor_id_setor']);
        //echo "<script>alert('teste ".$_POST['he_setor_id_setor']."');</script>";
        $result = $this->cadastro->add_estoque();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/listar_view.php'</script>";
        }else{
            echo "<script>alert('Material não acadastrado!');history.back()</script>";
        }
    }
}
new cadastroController();