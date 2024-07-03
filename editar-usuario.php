<h1>Editar Usuário</h1>

<?php


if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM usuarios WHERE id = $id";
    $res = $conn->query($sql);

    if ($res->num_rows > 0) {
        $row = $res->fetch_object();
?>

<form action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php echo $row->id; ?>">
    
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php echo $row->nome; ?>" class="form-control">
    </div>
    
    <div class="mb-3">
        <label>Email</label>
        <input type="text" name="email" value="<?php echo $row->email; ?>" class="form-control">
    </div>
    
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" required>
    </div>
    
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc" value="<?php echo $row->data_nasc; ?>" class="form-control">
    </div>
    
    <div class="mb-3">
        <label>Tipo Cliente</label>
        <select name="tipo_cli" class="form-control">
            <option value="1" <?php echo ($row->tipo_cli == 1) ? 'selected' : ''; ?>>Pessoa Física</option>
            <option value="2" <?php echo ($row->tipo_cli == 2) ? 'selected' : ''; ?>>Pessoa Jurídica</option>
        </select>
    </div>
    
    <div class="mb-3">
        <label>CPF/CNPJ</label>
        <input type="text" name="cpf_cnpj" value="<?php echo $row->cpf_cnpj; ?>" class="form-control">
    </div>
    
    <div class="mb-3">
        <label>RG</label>
        <input type="text" name="rg" value="<?php echo $row->rg; ?>" class="form-control">
    </div>
    
    <div class="mb-3">
        <label>CEP</label>
        <input type="text" name="cep" value="<?php echo $row->cep; ?>" class="form-control">
    </div>
    
    <div class="mb-3">
        <label>Cidade</label>
        <input type="text" name="cidade" value="<?php echo $row->cidade; ?>" class="form-control">
    </div>
    
    <div class="mb-3">
        <label>Estado</label>
        <select name="estado" class="form-control">
            <option value="AC" <?php echo ($row->estado == 'AC') ? 'selected' : ''; ?>>Acre</option>
            <option value="AL" <?php echo ($row->estado == 'AL') ? 'selected' : ''; ?>>Alagoas</option>
            <!-- Adicione os demais estados aqui com a mesma lógica -->
        </select>
    </div>
    
    <div class="mb-3">
        <label>Rua</label>
        <input type="text" name="rua" value="<?php echo $row->rua; ?>" class="form-control">
    </div>
    
    <div class="mb-3">
        <label>Bairro</label>
        <input type="text" name="bairro" value="<?php echo $row->bairro; ?>" class="form-control">
    </div>
    
    <div class="mb-3">
        <label>Número</label>
        <input type="text" name="numero" value="<?php echo $row->numero; ?>" class="form-control">
    </div>
    
    <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="telefone" value="<?php echo $row->telefone; ?>" class="form-control">
    </div>
    
    <div class="mb-3">
        <label>Indicação</label>
        <input type="text" name="indicacao" value="<?php echo $row->indicacao; ?>" class="form-control">
    </div>
    
    <div class="mb-3">
        <label>Contato</label>
        <input type="text" name="contato" value="<?php echo $row->contato; ?>" class="form-control">
    </div>
    
    <div class="mb-3">
        <label>Cliente Ativo</label>
        <select name="ativo" class="form-control">
            <option value="1" <?php echo ($row->ativo == 1) ? 'selected' : ''; ?>>Ativo</option>
            <option value="2" <?php echo ($row->ativo == 2) ? 'selected' : ''; ?>>Inativo</option>
        </select>
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
