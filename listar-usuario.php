<h1>Listar Usuários</h1>
<?php

$sql = "SELECT * FROM usuarios";
$res = $conn->query($sql);

if ($res->num_rows > 0) {
    echo "<table class='table table-hover table-striped'>";
    echo "<tr>";
    echo "<th>#</th>";
    echo "<th>Nome</th>";
    echo "<th>Email</th>";
    echo "<th>Data de Nascimento</th>";
    echo "<th>Tipo Cliente</th>";
    echo "<th>CPF/CNPJ</th>";
    echo "<th>RG</th>";
    echo "<th>CEP</th>";
    echo "<th>Cidade</th>";
    echo "<th>Estado</th>";
    echo "<th>Rua</th>";
    echo "<th>Bairro</th>";
    echo "<th>Número</th>";
    echo "<th>Telefone</th>";
    echo "<th>Indicação</th>";
    echo "<th>Contato</th>";
    echo "<th>Ativo</th>";
    echo "<th>Ações</th>";
    echo "</tr>";

    while ($row = $res->fetch_object()) {
        echo "<tr>";
        echo "<td>".$row->id."</td>";
        echo "<td>".$row->nome."</td>";
        echo "<td>".$row->email."</td>";
        echo "<td>".$row->data_nasc."</td>";
        echo "<td>".$row->tipo_cli."</td>";
        echo "<td>".$row->cpf_cnpj."</td>";
        echo "<td>".$row->rg."</td>";
        echo "<td>".$row->cep."</td>";
        echo "<td>".$row->cidade."</td>";
        echo "<td>".$row->estado."</td>";
        echo "<td>".$row->rua."</td>";
        echo "<td>".$row->bairro."</td>";
        echo "<td>".$row->numero."</td>";
        echo "<td>".$row->telefone."</td>";
        echo "<td>".$row->indicacao."</td>";
        echo "<td>".$row->contato."</td>";
        echo "<td>".$row->ativo."</td>";
        echo "<td>
                <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                <button onclick=\"if(confirm('Tem certeza que deseja excluir esse usuário?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button> 

              </td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p class='alert alert-danger'>Nenhum usuário encontrado!</p>";
}
?>
