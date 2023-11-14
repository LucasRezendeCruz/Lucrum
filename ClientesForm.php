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
        $dados = $db->dbSelect("SELECT * FROM clientes WHERE id = ?", 'first', [$_GET['id']]);
    }
    ?>

        <main>
            <div>
                <div>
                    <h1>Clientes <?= subTitulo($_GET['acao']) ?></h1> 
                </div>

            </div>

            <form action="Clientes<?= $_GET['acao'] ?>.php" method="POST" 
                enctype="multipart/form-data">

                <input type="hidden" name="id" id="id" value="<?= isset($dados->id) ? $dados->id : "" ?>">

                <div class="">

                    <div class="">
                        <label for="cpfcnpj" class="form-label">CPF/CNPJ: </label>
                        <input type="number" class="form-control" placeholder="000.000.000-00"name="cpfcnpj" id="cpfcnpj" dir="rtl" required
                                value="<?= isset($dados->cpfcnpj) ? $dados->cpfcnpj : '' ?>">
                    </div>


                    <div class="">
                        <label for="razao" class="form-label">Razão: </label>
                        <input type="text" class="form-control" name="razao" 
                            id="razao" placeholder="Razão Social ou Nome" required maxlength="100"
                            value="<?= isset($dados->razao) ? $dados->razao : "" ?>">
                    </div>

                    <div class="">
                        <label for="telefone" class="form-label">Telefone: </label>
                        <input type="text" class="form-control" name="razao" 
                            id="telefone" placeholder="Telefone" required maxlength="100"
                            value="<?= isset($dados->telefone) ? $dados->telefone : "" ?>">
                    </div>

                    <div class="">
                        <label for="email" class="form-label">Email: </label>
                        <input type="text" class="form-control" name="email" 
                            id="email" placeholder="lucas@lucrum.com.br" required maxlength="100"
                            value="<?= isset($dados->email) ? $dados->email : "" ?>">
                    </div>

                    <div class="">
                        <label for="cep" class="form-label">CEP: </label>
                        <input type="text" class="form-control" name="cep" 
                            id="cep" placeholder="36.880-000" required maxlength="100"
                            value="<?= isset($dados->cep) ? $dados->cep : "" ?>">
                    </div>

                    <div class="">
                        <label for="logradouro" class="form-label">Logradouro: </label>
                        <input type="text" class="form-control" name="logradouro" 
                            id="logradouro" placeholder="Rua A" required maxlength="100"
                            value="<?= isset($dados->logradouro) ? $dados->logradouro : "" ?>">
                    </div>

                    <div class="">
                        <label for="numero" class="form-label">Número: </label>
                        <input type="text" class="form-control" name="numero" 
                            id="numero" placeholder="10" required maxlength="100"
                            value="<?= isset($dados->numero) ? $dados->numero : "" ?>">
                    </div>

                    <div class="">
                        <label for="bairro" class="form-label">Bairro: </label>
                        <input type="text" class="form-control" name="bairro" 
                            id="bairro" placeholder="Centro" required maxlength="100"
                            value="<?= isset($dados->bairro) ? $dados->bairro : "" ?>">
                    </div>

                    <div class="">
                        <label for="municipio" class="form-label">Município: </label>
                        <input type="text" class="form-control" name="municipio" 
                            id="municipio" placeholder="Muriaé" required maxlength="100"
                            value="<?= isset($dados->municipio) ? $dados->municipio : "" ?>">
                    </div>

                    <div class="">
                        <label for="estado" class="form-label">Estado: </label>
                        <select name="estado" id="estado" class="form-control" required>
                            <option value=""   <?= (isset($dados->estado) ? ($dados->estado == ""  ? 'selected' : '') : "")   ?>>Estado</option>
                            <option value="1"  <?= (isset($dados->estado) ? ($dados->estado == "1" ? 'selected' : '') : "")   ?>>Acre</option>
                            <option value="2"  <?= (isset($dados->estado) ? ($dados->estado == "2" ? 'selected' : '') : "")   ?>>Alagoas</option>
                            <option value="3"  <?= (isset($dados->estado) ? ($dados->estado == "3" ? 'selected' : '') : "")   ?>>Amapá</option>
                            <option value="4"  <?= (isset($dados->estado) ? ($dados->estado == "4" ? 'selected' : '') : "")   ?>>Amazonas</option>
                            <option value="5"  <?= (isset($dados->estado) ? ($dados->estado == "5" ? 'selected' : '') : "")   ?>>Bahia</option>
                            <option value="6"  <?= (isset($dados->estado) ? ($dados->estado == "6" ? 'selected' : '') : "")   ?>>Ceará</option>
                            <option value="7"  <?= (isset($dados->estado) ? ($dados->estado == "7" ? 'selected' : '') : "")   ?>>Distrito Federal</option>
                            <option value="8"  <?= (isset($dados->estado) ? ($dados->estado == "8" ? 'selected' : '') : "")   ?>>Espírito Santo</option>
                            <option value="9"  <?= (isset($dados->estado) ? ($dados->estado == "9" ? 'selected' : '') : "")   ?>>Goiás</option>
                            <option value="10" <?= (isset($dados->estado) ? ($dados->estado == "10" ? 'selected' : '') : "")  ?>>Maranhão</option>
                            <option value="11" <?= (isset($dados->estado) ? ($dados->estado == "11" ? 'selected' : '') : "")  ?>>Mato Grosso</option>
                            <option value="12" <?= (isset($dados->estado) ? ($dados->estado == "12" ? 'selected' : '') : "")  ?>>Mato Grosso do Sul</option>
                            <option value="12" <?= (isset($dados->estado) ? ($dados->estado == "13" ? 'selected' : '') : "")  ?>>Minas Gerais</option>
                            <option value="13" <?= (isset($dados->estado) ? ($dados->estado == "14" ? 'selected' : '') : "")  ?>>Pará</option>
                            <option value="15" <?= (isset($dados->estado) ? ($dados->estado == "15" ? 'selected' : '') : "")  ?>>Paraíba</option>
                            <option value="16" <?= (isset($dados->estado) ? ($dados->estado == "16" ? 'selected' : '') : "")  ?>>Paraná</option>
                            <option value="17" <?= (isset($dados->estado) ? ($dados->estado == "17" ? 'selected' : '') : "")  ?>>Pernambuco</option>
                            <option value="18" <?= (isset($dados->estado) ? ($dados->estado == "18" ? 'selected' : '') : "")  ?>>Piauí</option>
                            <option value="19" <?= (isset($dados->estado) ? ($dados->estado == "19" ? 'selected' : '') : "")  ?>>Rio de Janeiro</option>
                            <option value="20" <?= (isset($dados->estado) ? ($dados->estado == "20" ? 'selected' : '') : "")  ?>>Rio Grande do Norte</option>
                            <option value="21" <?= (isset($dados->estado) ? ($dados->estado == "21" ? 'selected' : '') : "")  ?>>Rio Grande do Sul</option>
                            <option value="22" <?= (isset($dados->estado) ? ($dados->estado == "22" ? 'selected' : '') : "")  ?>>Rondônia</option>
                            <option value="23" <?= (isset($dados->estado) ? ($dados->estado == "23" ? 'selected' : '') : "")  ?>>Roraima</option>
                            <option value="23" <?= (isset($dados->estado) ? ($dados->estado == "24" ? 'selected' : '') : "")  ?>>Santa Catarina</option>
                            <option value="23" <?= (isset($dados->estado) ? ($dados->estado == "25" ? 'selected' : '') : "")  ?>>São Paulo</option>
                            <option value="23" <?= (isset($dados->estado) ? ($dados->estado == "26" ? 'selected' : '') : "")  ?>>Sergipe</option>
                            <option value="23" <?= (isset($dados->estado) ? ($dados->estado == "27" ? 'selected' : '') : "")  ?>>Tocantins</option>
                            

                        </select>
                    </div>

                </div>

                <input type="hidden" name="id_" id="id" value="<?= (isset($dados->id) ? $dados->id : "") ?>">

                <div class="">
                    <a href="Clientes.php" class="">Voltar</a>
                    
                    <?php if ($_GET['acao'] != "view"): /* botão gravar não é exibido na visualização dos dados */ ?>
                        <button type="submit" class="">Gravar</button>
                    <?php endif; ?>
                </div>
            </form>

        </main>

        <script src="ckeditor5/ckeditor5-build-classic/ckeditor.js"></script>

        <script type="text/javascript">

            $(document).ready( function() { 
                
                $('#cpfcnpj').mask('###.###.###-##', {reverse: true});
            })

            ClassicEditor
                .create(document.querySelector('#caracteristicas'))
                .catch( error => {
                    console.error(error);
                });

        </script>

<?php

require_once "comuns/rodape.php";