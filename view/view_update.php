<?php require_once("../controller/controler_busca.php");?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>


<form method="post" action="../controller/controler_update_mat.php" id="form" name="form" >
            <div >
                <input  type="text" id="pro_nome" name="pro_nome" value="<?php echo $busca->getPro_nome();?>" required >
                <input  type="number" id="pro_quantidade" name="pro_quantidade" value="<?php echo $busca->getPro_quantidade();?>" required>
                <input  type="number" id="pro_slotprateleira" name="pro_slotprateleira"value="<?php echo $busca->getPro_slotprateleira();?>" required>
                <input  type="text" id="pro_fabricante" name="pro_fabricante" value="<?php echo $busca->getPro_fabricante();?>" required>
                <input type="hidden" name="id_produto" value="<?php echo $busca->getId_produto();?>">
            </div>
            <div>
                <button type="submit"  id="cadastrar">Cadastrar</button>
            </div>
        </form>


    
</body>
</html>