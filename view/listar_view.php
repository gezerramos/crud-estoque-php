<?php require_once("../controller/controler_listar.php");?>
<!DOCTYPE html>
<html lang="pt-br">

<body>
    <table  border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Prateleira</th>
                <th>Fabricante</th>
                <th>Condição</th>
                <th>Filial</th>
                <th>Setor</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php new listarController();  ?>
        </tbody>
    </table>
</body>
</html>