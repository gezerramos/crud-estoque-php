<!DOCTYPE HTML>
<html>
<body>
    <div >
        <form method="post" action="../controller/controler_cad_mat.php" id="form" name="form" >
            <div >
                <input  type="text" id="pro_nome" name="pro_nome" placeholder="Nome do Material" required autofocus>
                <input  type="number" id="pro_quantidade" name="pro_quantidade" placeholder="Quantidade" required>
                <input  type="number" id="pro_slotprateleira" name="pro_slotprateleira" placeholder="Prateleira" required>
                <input  type="text" id="pro_fabricante" name="pro_fabricante" placeholder="Fabricante" required>
                <select name="pro_condicao" >
				    <option value=""></option>
                    <option value="novo">Novo</option>
                    <option value="usado">Usado</option>
                </select>
                <select name="he_filial_id_filial" required >
				    <option value=""></option>
                    <option value="1">Vitoria da Conquista</option>
                    <option value="2">Ilheus</option>
                    <option value="3">Brumado</option>

                </select>
                <select name="he_setor_id_setor" required >
				    <option value=""></option>
                    <option value="1">Administrativo</option>
                    <option value="2">Instalação</option>
                    <option value="3">Implantação</option>

                </select>
            </div>
            <div>
                <button type="submit"  id="cadastrar">Cadastrar</button>
            </div>
        </form>
    </div>

</body>

</html>