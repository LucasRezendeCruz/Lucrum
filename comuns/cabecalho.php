<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucrum</title>
    <!-- MATERIAL CDN -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp"  rel="stylesheet"/>
    <!-- STYLESHHET -->
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>


</head>
<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="/images/logo.png" alt="logo">
                    <h2>LU<span class="lucrum">CRUM</span></h2>
                </div>
                <div class="close" id="close-btn">
                        <span class="material-symbols-sharp" >close</span>
                </div>
            </div>

            <div class="sidebar">
                <a href="./index.php" class="active">
                    <span class="material-symbols-sharp">dashboard</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">insights</span>
                    <h3>Analítico</h3>
                </a>
                <a href="./pedidos.php">
                    <span class="material-symbols-sharp">receipt_long</span>
                    <h3>Pedidos</h3>
                </a>
                <a href="./clientes.php">
                    <span class="material-symbols-sharp">person</span>
                    <h3>Clientes</h3>
                </a>
                <a href="./produtos.php">
                    <span class="material-symbols-sharp">inventory</span>
                    <h3>Produtos</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">inventory_2</span>
                    <h3>Estoque</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">account_balance</span>
                    <h3>Financeiro</h3>
                </a>
            </div>
        </aside>
        <!------------------------- END OF ASIDE ------------------------->