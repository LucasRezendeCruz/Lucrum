<?php
    require_once "library/Database.php";
    require_once "library/Funcoes.php";

    if (isset($_POST['cpfcnpj'])) {

        $db = new Database();

        try {

            

            $result = $db->dbInsert("INSERT INTO clientes
                                    (cpfcnpj, razao, telefone, email, logradouro, numero, municipio, bairro, cep, estado)
                                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)",
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
                return header("Location: Clientes.php?msgSucesso=Registro inserido com sucesso.");
            } else {
                return header("Location: Clientes.php?msgError=Falha ao tentar inserir o registro.");
            }
                
            

        } catch (Exception $ex) {
            echo '<p style="color: red;">ERROR: '. $ex->getMessage(). "</p>";
        }
        
    } else {
        return header("Location: Clientes.php");
    }