<?php
    require_once "library/Database.php";
    require_once "library/Funcoes.php";

    if (isset($_POST['descricao'])) {

        $db = new Database();

        try {

            

            $result = $db->dbInsert("INSERT INTO produtos
                                    (descricao, preco, unidade)
                                    VALUES (?, ?, ?)",
                                    [
                                        $_POST['descricao'],
                                        $_POST['preco'],
                                        $_POST['unidade']
                                    ]);

            if ($result) {
                return header("Location: Produtos.php?msgSucesso=Registro inserido com sucesso.");
            } else {
                return header("Location: Produtos.php?msgError=Falha ao tentar inserir o registro.");
            }
                
            

        } catch (Exception $ex) {
            echo '<p style="color: red;">ERROR: '. $ex->getMessage(). "</p>";
        }
        
    } else {
        return header("Location: Produtos.php");
    }