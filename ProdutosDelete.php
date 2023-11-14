<?php
    require_once "library/Database.php";

    if (isset($_POST['id'])) {

        $db = new Database();

        try {
            $result = $db->dbDelete("DELETE FROM produtos 
                                    WHERE id = ?",
                                    [$_POST['id']]
                                );            
            eturn header("Location: Produtos.php");
        } catch (Exception $ex) {
            echo '<p style="color: red;">ERROR: '. $ex->getMessage(). "</p>";
        }

    } else {
        return header("Location: Produtos.php");
    }