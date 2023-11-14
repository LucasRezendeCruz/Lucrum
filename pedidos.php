<?php
    require_once "comuns/cabecalho.php";
    require_once "library/Database.php";
    require_once "helpers/Formulario.php";


    $db = new Database();
    $dados = [];

    $dadosPedidos = $db->dbSelect("SELECT * FROM produtos");


    //$dados = $db->dbSelect("SELECT * FROM Produtos WHERE ID_Produtos = ?", 'first', [$_GET['ID_Produtos']]);
    

?>

    <main>
        <h1>Produtos</h1>
        
        <form action="POST">


        </form>




        <form class="g-3" action="<?= $_GET['acao'] ?>Cidade.php" method="POST">
        <input type="hidden" name="id" id="id" value="<?= isset($dados->id) ? $dados->id : "" ?>">
        <div class="row">

            <div class="col-6">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" 
                    id="nome" placeholder="Nome da Cidade" required
                    value="<?= isset($dados->nome) ? $dados->nome : "" ?>">
            </div>

            <div class="col-2">
                <label for="uf_id" class="form-label">UF</label>
                <select name="uf_id" id="uf_id" class="form-control" required>
                    <option value="">...</option>
                    <?php foreach ($dadosUf as $uf): ?>
                        <option <?= (isset($dados->uf_id) ? ($dados->uf_id == $uf['id'] ? 'selected' : '') : "") ?> 
                        value="<?= $uf['id'] ?>"><?= $uf['sigla'] . ' - ' .  $uf['descricao'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="col-2">
                <label for="statusRegistro" class="form-label">Status</label>
                <select name="statusRegistro" id="statusRegistro" class="form-control" required>
                    <option value=""  <?= (isset($dados->statusRegistro) ? ($dados->statusRegistro == ""  ? 'selected' : '') : "") ?>>...</option>
                    <option value="1" <?= (isset($dados->statusRegistro) ? ($dados->statusRegistro == "1" ? 'selected' : '') : "") ?>>Ativo</option>
                    <option value="2" <?= (isset($dados->statusRegistro) ? ($dados->statusRegistro == "2" ? 'selected' : '') : "") ?>>Inativo</option>
                </select>
            </div>

        </div>

        <div class="col-auto mt-5">
            <a href="listaCidade.php" class="btn btn-outline-secondary btn-sm">Voltar</a>
            
            <?php if ($_GET['acao'] != "view"): /* botão gravar não é exibido na visualização dos dados */ ?>
                <button type="submit" class="btn btn-primary btn-sm">Gravar</button>
            <?php endif; ?>
        </div>
        </form>


    </main>

<?php
    require_once "comuns/rodape.php";
?>