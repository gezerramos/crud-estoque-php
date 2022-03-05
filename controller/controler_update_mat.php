<?php

require_once("../model/update_estoque.php");
class Update_estoque{

    private $up_est;

    public function __construct(){
        $this->up_est = new Up_est();
        $this->add_estoque();
    }

    private function add_estoque(){
        $this->up_est->setPro_nome($_POST['pro_nome']);
        $this->up_est->setPro_quantidade($_POST['pro_quantidade']);
        $this->up_est->setPro_slotprateleira($_POST['pro_slotprateleira']);
        $this->up_est->setPro_fabricante($_POST['pro_fabricante']);
        $this->up_est->setId_produto($_POST['id_produto']);
        
        //echo "<script>alert('teste ".$_POST['he_setor_id_setor']."');</script>";
        $result = $this->up_est->add_estoque();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/listar_view.php'</script>";
        }else{
            echo "<script>alert('Material não acadastrado!');history.back()</script>";
        }
    }
}
new Update_estoque();

?>

