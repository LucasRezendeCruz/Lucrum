<?php

    require_once "helpers/Formulario.php";
    require_once "comuns/cabecalho.php";
    require_once "library/Database.php";
    require_once "library/Funcoes.php";

    $db = new Database();
    $dados = [];


    /*
    *   Se for alteração, exclusão ou visualização busca a UF pelo ID que foi recebido via método GET
    */
    if ($_GET['acao'] != "insert") {
        $dados = $db->dbSelect("SELECT * FROM produtos WHERE id = ?", 'first', [$_GET['id']]);
    }
    ?>

        <main>
            <div>
                <div>
                    <h1>Produtos<?= subTitulo($_GET['acao']) ?></h1> 
                </div>

            </div>

            <form action="Produtos<?= $_GET['acao'] ?>.php" method="POST" 
                enctype="multipart/form-data">

                <input type="hidden" name="id" id="id" value="<?= isset($dados->id) ? $dados->id : "" ?>">

                <div class="">

                    <div class="">
                        <label for="descricao" class="form-label">Descrição: </label>
                        <input type="text" class="form-control" name="descricao" 
                            id="descricao" placeholder="Descriçào do Produto" required maxlength="100"
                            value="<?= isset($dados->descricao) ? $dados->descricao : "" ?>">
                    </div>

                    <div class="">
                        <label for="preco" class="form-label">Preço: </label>
                        <input type="text" class="form-control" name="preco" id="preco" dir="rtl" required
                                value="<?= isset($dados->preco) ? $dados->preco : '0,00' ?>">
                    </div>

                    <div class="">
                        <label for="unidade" class="form-label">Unidade Medida: </label>
                        <select name="unidade" id="unidade" class="form-control" required>
                            <option value="14"   <?= (isset($dados->unidade) ? ($dados->unidade == "14"  ? 'selected' : '') : "") ?>>Unidade</option>
                            <option value="1"  <?= (isset($dados->unidade) ? ($dados->unidade == "1" ? 'selected' : '') : "")   ?>>Bisnaga</option>
                            <option value="2"  <?= (isset($dados->unidade) ? ($dados->unidade == "2" ? 'selected' : '') : "")   ?>>Caixa</option>
                            <option value="3"  <?= (isset($dados->unidade) ? ($dados->unidade == "3" ? 'selected' : '') : "")   ?>>Balde</option>
                            <option value="4"  <?= (isset($dados->unidade) ? ($dados->unidade == "4" ? 'selected' : '') : "")   ?>>Dúzia</option>
                            <option value="5"  <?= (isset($dados->unidade) ? ($dados->unidade == "5" ? 'selected' : '') : "")   ?>>Frasco</option>
                            <option value="6"  <?= (isset($dados->unidade) ? ($dados->unidade == "6" ? 'selected' : '') : "")   ?>>Jogo</option>
                            <option value="7"  <?= (isset($dados->unidade) ? ($dados->unidade == "7" ? 'selected' : '') : "")   ?>>Quilo</option>
                            <option value="8"  <?= (isset($dados->unidade) ? ($dados->unidade == "8" ? 'selected' : '') : "")   ?>>Litros</option>
                            <option value="9"  <?= (isset($dados->unidade) ? ($dados->unidade == "9" ? 'selected' : '') : "")   ?>>Metro</option>
                            <option value="10" <?= (isset($dados->unidade) ? ($dados->unidade == "10" ? 'selected' : '') : "")  ?>>Peça</option>
                            <option value="11" <?= (isset($dados->unidade) ? ($dados->unidade == "11" ? 'selected' : '') : "")  ?>>Saco</option>
                            <option value="12" <?= (isset($dados->unidade) ? ($dados->unidade == "12" ? 'selected' : '') : "")  ?>>Tambor</option>
                            <option value="13" <?= (isset($dados->unidade) ? ($dados->unidade == "14" ? 'selected' : '') : "")  ?>>Pote</option>
                            <option value="15" <?= (isset($dados->unidade) ? ($dados->unidade == "15" ? 'selected' : '') : "")  ?>>Metros Quadrados</option>
                            <option value="16" <?= (isset($dados->unidade) ? ($dados->unidade == "16" ? 'selected' : '') : "")  ?>>Metros Cubicos</option>
                            <option value="17" <?= (isset($dados->unidade) ? ($dados->unidade == "17" ? 'selected' : '') : "")  ?>>Galao</option>
                            <option value="18" <?= (isset($dados->unidade) ? ($dados->unidade == "18" ? 'selected' : '') : "")  ?>>Tonelada</option>
                            <option value="19" <?= (isset($dados->unidade) ? ($dados->unidade == "19" ? 'selected' : '') : "")  ?>>Milheiro</option>
                            <option value="20" <?= (isset($dados->unidade) ? ($dados->unidade == "20" ? 'selected' : '') : "")  ?>>Envelope</option>
                            <option value="21" <?= (isset($dados->unidade) ? ($dados->unidade == "21" ? 'selected' : '') : "")  ?>>Conjunto</option>
                            <option value="22" <?= (isset($dados->unidade) ? ($dados->unidade == "22" ? 'selected' : '') : "")  ?>>Kit</option>
                            <option value="23" <?= (isset($dados->unidade) ? ($dados->unidade == "23" ? 'selected' : '') : "")  ?>>Mililitro</option>
                            

                        </select>
                    </div>

                </div>

                <input type="hidden" name="id_" id="id" value="<?= (isset($dados->id) ? $dados->id : "") ?>">

                <div class="">
                    <a href="Produtos.php" class="">Voltar</a>
                    
                    <?php if ($_GET['acao'] != "view"): /* botão gravar não é exibido na visualização dos dados */ ?>
                        <button type="submit" class="">Gravar</button>
                    <?php endif; ?>
                </div>
            </form>

        </main>

        

<?php

require_once "comuns/rodape.php";