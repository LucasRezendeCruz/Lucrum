<?php
    require_once "comuns/cabecalho.php";
    require_once "library/DataBase.php";

    $db = new Database();
    $pedidos = $db->dbSelect("SELECT count(id) AS pedidos FROM pedidos");

    $tpedidos = $pedidos[0]['pedidos'];

    
?>
        <main>
            <h1>Dashboard</h1>

            <div class="date">
                <input type="date">
            </div>

            <div class="insights">
                <div class="sales">
                    <span class="material-symbols-sharp sales">analytics</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total de Vendas</h3>
                            <h1>R$</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38"cy="38"r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>50%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Últimos 7 dias</small>
                </div>
                <!------------------------- END OF SALES ------------------------->

                <div class="expenses">
                    <span class="material-symbols-sharp expenses">bar_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total de Despesas</h3>
                            <h1>R$</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38"cy="38"r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>50%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Últimos 7 dias</small>
                </div>
                <!------------------------- END OF EXPENSES ------------------------->

                <div class="orders">
                    <span class="material-symbols-sharp orders">stacked_line_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total de Pedidos</h3>
                            <h1><?php echo $tpedidos ; ?> Pedidos</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38"cy="38"r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>50%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Últimos 7 dias</small>
                </div>
                <!------------------------- END OF ORDERS ------------------------->
            </div>
            

            <div class="recent-order">
                <h2>Pedidos Recentes</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID Pedido</th>
                            <th>Cliente</th>
                            <th>Valor Pedido</th>
                            <th>Forma Pagemento</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Produto 1</td>
                            <td>10</td>
                            <td>Cartão</td>
                            <td class="warning">Pendente</td>
                            <td class="lucrum">Detalhes</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Produto 4</td>
                            <td>100</td>
                            <td>Boleto</td>
                            <td class="success">Enviado</td>
                            <td class="lucrum">Detalhes</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Produto 5</td>
                            <td>32</td>
                            <td>Cartão</td>
                            <td class="warning">Pendente</td>
                            <td class="lucrum">Detalhes</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Produto 10</td>
                            <td>55</td>
                            <td>Pix</td>
                            <td class="warning">Pendente</td>
                            <td class="lucrum">Detalhes</td>
                        </tr>
                        <tr>
                            <td>30</td>
                            <td>Produto 30</td>
                            <td>6</td>
                            <td>Dinheiro</td>
                            <td class="danger">Cancelado</td>
                            <td class="lucrum">Detalhes</td>
                        </tr>
                    </tbody>
                </table>
                <a href="Pedidos.php">Mostrar Todos</a>
            </div>
        </main>
        <!------------------------- END OF MAIN ------------------------->
        
<?php
    require_once "comuns/rodape.php";
?>