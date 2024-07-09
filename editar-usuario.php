<section class="text-center">
    <div class="p-5" height:300px;>
    </div>

<div class="card mx-4 mx-md-5 shadow-5-strong bg-body-tertiary" style="
        margin-top: -100px;
        backdrop-filter: blur(30px);">
        <?php
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM usuarios WHERE id = $id";
            $res = $conn->query($sql);

            if ($res->num_rows > 0) {
                $row = $res->fetch_object();
        ?>
    <div class="card-body py-5 px-md-5">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                 <h2 class="fw-bold mb-5">Editar</h2>
                    <form action="?page=salvar" method="POST">
                        <input type="hidden" name="acao" value="editar">
                        <input type="hidden" name="id" value="<?php echo $row->id; ?>">
                    <div data-mdb-input-init class="form-outline mb-4">
                        <div data-mdb-input-init class="form-outline">
                            <label>Nome</label>
                            <input type="text" name="nome" value="<?php echo $row->nome; ?>" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div>
                                   <label class="form-label">Email</label>
                                   <input type="text" name="email" value="<?php echo $row->email; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label class="form-label">Senha</label>
                                <input type="password" name="senha" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label>Data de Nascimento</label>
                                <input type="date" name="data_nasc" value="<?php echo $row->data_nasc; ?>" class="form-control">
                            </div>
                            <div class="col-md-6 mb-4">
                            <label>Tipo Cliente</label>
                                <select name="tipo_cli" class="form-control">
                                    <option value="1" <?php echo ($row->tipo_cli == 1) ? 'selected' : ''; ?>>Pessoa Física</option>
                                    <option value="2" <?php echo ($row->tipo_cli == 2) ? 'selected' : ''; ?>>Pessoa Jurídica</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label>CPF/CNPJ</label>
                                <input type="text" name="cpf_cnpj" value="<?php echo $row->cpf_cnpj; ?>" class="form-control">
                            </div>
                            <div class="col-md-6 mb-4">
                                <label>RG</label>
                                <input type="text" name="rg" value="<?php echo $row->rg; ?>" class="form-control">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label>CEP</label>
                                <input type="text" name="cep" value="<?php echo $row->cep; ?>" class="form-control">
                            </div>
                            
                            <div class="col-md-6 mb-4">
                                <label>Cidade</label>
                                <input type="text" name="cidade" value="<?php echo $row->cidade; ?>" class="form-control">
                            </div>
                        </div>

                    <div class="row" >
                        <div class="col-md-6 mb-4">
                            <label>Estado</label>
                            <select name="estado" class="form-control">
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                            </select>
                        </div>
                        
                        <div class="col-md-6 mb-4">
                            <label>Rua</label>
                            <input type="text" name="rua" value="<?php echo $row->rua; ?>" class="form-control">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <label>Bairro</label>
                            <input type="text" name="bairro" value="<?php echo $row->bairro; ?>" class="form-control">
                        </div>
                        
                        <div class="col-md-6 mb-4">
                            <label>Número</label>
                            <input type="text" name="numero" value="<?php echo $row->numero; ?>" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <label>Telefone</label>
                            <input type="text" name="telefone" value="<?php echo $row->telefone; ?>" class="form-control">
                        </div>
                        
                        <div class="col-md-6 mb-4">
                            <label>Cliente Ativo</label>
                            <select name="ativo" class="form-control">
                                <option value="Sim" <?php echo ($row->ativo == 1) ? 'selected' : ''; ?>>Ativo</option>
                                <option value="Não" <?php echo ($row->ativo == 2) ? 'selected' : ''; ?>>Inativo</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>

                <?php
                    } else {
                        echo "<p class='alert alert-danger'>Usuário não encontrado!</p>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
</div>