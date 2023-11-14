<?php
    require_once "library/Database.php";

    if (isset($_POST['id'])) {

        $db = new Database();

        try {
            $result = $db->dbUpdate("UPDATE produtos 
                                    SET cpfcnpj = ?, razao = ?, telefone = ?, email = ?, logradouro = ?, numero = ?, bairro = ?, municipio = ?, cep = ?, estado = ?
                                    WHERE id = ?",
                                    [
                                        $_POST['cpfcnpj'],
                                        $_POST['razao'],
                                        $_POST['telefone'],
                                        $_POST['email'],
                                        $_POST['logradouro'],
                                        $_POST['numero'],
                                        $_POST['bairro'],
                                        $_POST['municipio'],
                                        $_POST['cep'],
                                        $_POST['estado']
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