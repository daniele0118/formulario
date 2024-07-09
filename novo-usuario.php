
<section class="text-center">
  <div class="p-5" height:300px;>
  </div>
  <div class="card mx-4 mx-md-5 shadow-5-strong bg-body-tertiary" style="
        margin-top: -100px;
        backdrop-filter: blur(30px);">
    <div class="card-body py-5 px-md-5">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Cadastrar</h2>
          <form action="?page=salvar" method="POST">
          <input type="hidden" name="acao" value="cadastrar">
            
              <div data-mdb-input-init class="form-outline mb-4">
                <div data-mdb-input-init class="form-outline">
                  <input type="text" name="nome" class="form-control" />
                  <label class="form-label">Nome completo</label>
                </div>
              </div>

            <div class="row">
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                  <input type="text" name="email" class="form-control" />
                  <label class="form-label">Email</label>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                  <input type="password" name="senha" class="form-control" />
                  <label class="form-label">Senha</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                  <input type="date" name="data_nasc" class="form-control">
                  <label class="form-label">Data de nascimento</label>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                  <input type="text" name="telefone" class="form-control">
                  <label class="form-label">Telefone</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                  <select id="tipo_cli" name="tipo_cli" class="form-control">
                    <option value="PF">Pessoa Física</option>
                    <option value="PJ">Pessoa Jurídica</option>
                  </select>
                  <label for="tipo_cli">Tipo cliente</label>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                  <input type="text" id="cpf_cnpj" class="form-control" maxlength="14">
                  <label class="form-label">CPF/CNPJ</label>
                 
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                  <input type="text" name="rg" class="form-control"/>
                  <label class="form-label">RG</label>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                  <input type="text" id="cep" class="form-control" maxlength="9">
                  <label class="form-label">CEP</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                  <select id="estado" name="estado" class="form-control">
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
                  <label for="tipo_cli">Estado</label>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                  <input type="text" name="cidade" class="form-control">
                  <label class="form-label">Cidade</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                  <input type="text" name="rua" class="form-control" />
                  <label class="form-label">Rua</label>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div data-mdb-input-init class="form-outline">
                  <input type="text" name="bairro" class="form-control">
                  <label class="form-label">Bairro</label>
                </div>
              </div>
              <div class="col-md-2 mb-4">
                <div data-mdb-input-init class="form-outline">
                  <input type="text" name="numero" class="form-control" />
                  <label class="form-label">Número</label>
                </div>
              </div>
            </div>

            <div class="form-check d-flex justify-content-center mb-4">
              <input class="form-check-input me-2" type="checkbox" value="Sim" id="ativo" name="ativo "checked />
              <label class="form-check-label">Cliente ativo</label>
            </div>

            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">
              Enviar
            </button>

            </div>
          </form>
        </div>
      </div>
    </div>
</section>

<script src="validacao.js"></script>

