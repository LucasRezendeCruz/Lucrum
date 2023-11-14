<?php
    require_once "library/Database.php";
    require_once "library/Funcoes.php";

    // Carrega cabeçalho HTML (header, nav, etc...)
    require_once "comuns/cabecalho.php";

    // carregando os helpers
    require_once "helpers/Formulario.php";

    // Criando o objeto Db para classe de base de dados
    $db = new Database();

    // Buscar a lista de Produtos na base de dados
    $data = $db->dbSelect("SELECT * FROM clientes ORDER BY id");
?>

    <main>
        <h1>Lista Clientes</h1>
        <div class="btnadd">
            <div>
                <a href="ClientesForm.php?acao=insert" title="Novo">
                    <span class="material-symbols-sharp">add</span>
                    <h3>Adicionar Cliente</h3>
                </a>
            </div>
        </div>
        
            
        <div class="">
            <div class="">
                <?php if (isset($_GET['msgSucesso'])): ?>

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><?= $_GET['msgSucesso'] ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php endif; ?>

                <?php if (isset($_GET['msgError'])): ?>

                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong><?= $_GET['msgError'] ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php endif; ?>
            </div>
        </div>


        
        <div class="recent-order">
            
            <table id="tbListaCliente">
                <thead >
                    <tr>
                        <th>ID</th>
                        <th>Razão</th>
                        <th>CPF/CNPJ</th>
                        <th>Opções</th>
                    </tr>
                </<thead>
                <tbody>
                    <?php
                        foreach ($data as $row) {
                            ?>
                            <tr>
                                <td><?= $row['id'] ?></td>
                                <td><?= $row['razao'] ?></td>
                                <td><?= $row['cpfcnpj'] ?></td>
                                <td>
                                    <a href="ProdutosForm.php?acao=update&id=<?= $row['id'] ?>" ><span class="warning">Alterar</span></a>
                                    <a href="ProdutosForm.php?acao=delete&id=<?= $row['id'] ?>" ><span class="danger">Excluir</span></a>
                                    <a href="ProdutosForm.php?acao=view&id=<?= $row['id'] ?>"   ><span class="sucess">Visualizar</span></a>
                                </td>
                            </tr>
                            <?php
                        }
                    ?>
                </tbody>
                
            </table>
        </div>
        
        

    </main>

<?php
    echo datatables("tbListaCliente");
                        
    require_once "comuns/rodape.php";
?>