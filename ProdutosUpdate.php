<?php
    require_once "library/Database.php";

    if (isset($_POST['id'])) {

        $db = new Database();

        try {
            $result = $db->dbUpdate("UPDATE produtos 
                                    SET descricao = ?, preco = ?, unidade = ?
                                    WHERE id = ?",
                                    [
                                        $_POST['descricao'],
                                        $_POST['preco'],
                                        $_POST['unidade'],
                                        $_POST['id']
                                    ]);

            if ($result) {
                return header("Location: Produtos.php?msgSucesso=Registro alterado com sucesso.");
            } else {
                return header("Location: Produtos.php?msgError=Falha ao tentar alterar o registro.");
            }
            
        } catch (Exception $ex) {
            echo '<p style="color: red;">ERROR: '. $ex->getMessage(). "</p>";
        }

    } else {
        return header("Location: Produtos.php");
    }