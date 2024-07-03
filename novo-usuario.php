  <h1>
    Novo Usuário    
  </h1>
  <form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
      <label>Nome</label>
      <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
      <label>Email</label>
      <input type="text" name="email" class="form-control">
    </div>
    <div class="mb-3">
      <label>Senha</label>
      <input type="password" name="senha" class="form-control">
    </div>
    <div class="mb-3">
      <label>Data</label>
      <input type="date" name="data_nasc" class="form-control">
    </div>
    <div>
      <label for="tipo_cli">Tipo cliente</label>
        <select id="tipo_cli" name="tipo_cli">
          <option value="1">Pessoa Física</option>
          <option value="2">Pessoa Jurídica</option>
        </select>
    </div>
    <div class="mb-3">
      <label>CPF/CNPJ</label>
      <input type="text" name="cpf_cnpj" class="form-control">
    </div>
    <div class="mb-3">
      <label>RG</label>
      <input type="text" name="rg" class="form-control">
    </div>
    <div class="mb-3">
      <label>CEP</label>
      <input type="text" name="cep" class="form-control">
    </div>
    <div class="mb-3">
      <label>Cidade</label>
      <input type="text" name="cidade" class="form-control">
    </div>
    <div class="mb-3">
    
  <label for="estado">Estado</label>
  <select id="estado" name="estado">
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
    <div class="mb-3">
      <label>Rua</label>
      <input type="text" name="rua" class="form-control">
    </div>
    <div class="mb-3">
      <label>Bairro</label>
      <input type="text" name="bairro" class="form-control">
    </div>
    <div class="mb-3">
      <label>Número</label>
      <input type="text" name="numero" class="form-control">
    </div>
    <div class="mb-3">
      <label>Telefone</label>
      <input type="text" name="telefone" class="form-control">
    </div>
    <div class="mb-3">
      <label>Indicação</label>
      <input type="text" name="indicacao" class="form-control">
    </div>
    <div class="mb-3">
      <label>Contato</label>
      <input type="text" name="contato" class="form-control">
    </div>
    <label for="ativo">Cliente Ativo</label>
        <select id="ativo" name="ativo">
          <option value="1">Ativo</option>
          <option value="2">Inativo</option>
        </select>

    <div class="mb-3">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </form>