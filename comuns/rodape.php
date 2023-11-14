<?php

$db = new Database();
$clientes = $db->dbSelect("SELECT count(id) AS QUANTCLIENTES FROM produtos");

$qtd = $clientes[0]['QUANTCLIENTES'];


?>

<div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-symbols-sharp">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-symbols-sharp active">light_mode</span>
                    <span class="material-symbols-sharp">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Olá, <b>Cliente</b></p>
                        <small class="text-muted lucrum">Plano V.1</small>
                    </div>
                    <div class="profile-photo">
                        <img src="/images/profile-1.jpg" alt="client">
                    </div>
                </div>
            </div>
            <!--- END OF TOP --->

            <div class="sales-analytics">
                <h2>Analítico</h2>
                <div class="item online">
                    <span class="material-symbols-sharp icon">shopping_cart</span>
                    <div class="right">
                        <div class="info">
                            <h3>Vendas Online</h3>
                        </div>
                        <h3>3000</h3>
                    </div>
                </div>
                <div class="item offline">
                    <span class="material-symbols-sharp icon">local_mall</span>
                    <div class="right">
                        <div class="info">
                            <h3>Vendas Físicas</h3>
                        </div>
                        <h3>1500</h3>
                    </div>
                </div>
                <div class="item clients">
                    <span class="material-symbols-sharp icon">person</span>
                    <div class="right">
                        <div class="info">
                            <h3>Total de Clientes</h3>
                        </div>
                        <h3><?php echo $qtd ; ?></h3>
                    </div>
                </div>
                <div class="item add-product">
                    <div>
                        <span class="material-symbols-sharp">add</span>
                        <h3>Adicionar Produto</h3>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="./index.js"></script>
</body>
</html>