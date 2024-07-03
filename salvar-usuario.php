<?php

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = mysqli_real_escape_string($conn, $_POST["nome"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $senha = md5($_POST["senha"]);
        $data_nasc = $_POST["data_nasc"];
        $tipo_cli = $_POST["tipo_cli"];
        $cpf_cnpj = mysqli_real_escape_string($conn, $_POST["cpf_cnpj"]);
        $rg = mysqli_real_escape_string($conn, $_POST["rg"]);
        $cep = mysqli_real_escape_string($conn, $_POST["cep"]);
        $cidade = mysqli_real_escape_string($conn, $_POST["cidade"]);
        $estado = $_POST["estado"];
        $rua = mysqli_real_escape_string($conn, $_POST["rua"]);
        $bairro = mysqli_real_escape_string($conn, $_POST["bairro"]);
        $numero = $_POST["numero"];
        $telefone = mysqli_real_escape_string($conn, $_POST["telefone"]);
        $indicacao = $_POST["indicacao"];
        $contato = mysqli_real_escape_string($conn, $_POST["contato"]);
        $ativo = $_POST["ativo"];

        $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc, tipo_cli, cpf_cnpj, rg, cep, cidade, estado, rua, bairro, numero, 
                            telefone, indicacao, contato, ativo) 
                VALUES ('$nome', '$email', '$senha', '$data_nasc', '$tipo_cli', '$cpf_cnpj', '$rg', '$cep', '$cidade', '$estado', '$rua', '$bairro', '$numero',
                        '$telefone', '$indicacao', '$contato', '$ativo')";

        $res = $conn->query($sql);

        if ($res === TRUE) {
            echo "<script>alert('Cadastrado com sucesso');</script>";
            echo "<script>location.href='?page=listar';</script>";
        } else {
            echo "<script>alert('Não foi possível cadastrar: " . $conn->error . "');</script>";
            echo "<script>location.href='?page=cadastrar';</script>";
        }
        break;

        case 'editar':
            $id = $_POST["id"];
            $nome = mysqli_real_escape_string($conn, $_POST["nome"]);
            $email = mysqli_real_escape_string($conn, $_POST["email"]);
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];
            $tipo_cli = $_POST["tipo_cli"];
            $cpf_cnpj = mysqli_real_escape_string($conn, $_POST["cpf_cnpj"]);
            $rg = mysqli_real_escape_string($conn, $_POST["rg"]);
            $cep = mysqli_real_escape_string($conn, $_POST["cep"]);
            $cidade = mysqli_real_escape_string($conn, $_POST["cidade"]);
            $estado = $_POST["estado"];
            $rua = mysqli_real_escape_string($conn, $_POST["rua"]);
            $bairro = mysqli_real_escape_string($conn, $_POST["bairro"]);
            $numero = $_POST["numero"];
            $telefone = mysqli_real_escape_string($conn, $_POST["telefone"]);
            $indicacao = $_POST["indicacao"];
            $contato = mysqli_real_escape_string($conn, $_POST["contato"]);
            $ativo = $_POST["ativo"];
    
            $sql = "UPDATE usuarios 
                    SET nome='$nome',
                        email='$email',
                        senha='$senha',
                        data_nasc='$data_nasc',
                        tipo_cli='$tipo_cli',
                        cpf_cnpj='$cpf_cnpj',
                        rg='$rg',
                        cep='$cep',
                        cidade='$cidade',
                        estado='$estado',
                        rua='$rua',
                        bairro='$bairro',
                        numero='$numero',
                        telefone='$telefone',
                        indicacao='$indicacao',
                        contato='$contato',
                        ativo='$ativo'
                    WHERE id=$id";
    
            $res = $conn->query($sql);
    
            if ($res === TRUE) {
                echo "<script>alert('Editado com sucesso');</script>";
                echo "<script>location.href='?page=listar';</script>";
            } else {
                echo "<script>alert('Não foi possível editar: " .$conn->error . "');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }
            break;
    
            case 'excluir':
                $id = $_GET["id"];
                if (!empty($_GET["id"])) {
                    $sql = "DELETE FROM usuarios WHERE id=$id";

                    $res = $conn->query($sql);
        
                    if ($res === TRUE) {
                        echo "<script>alert('Excluído com sucesso');</script>";
                        echo "<script>location.href='?page=listar';</script>";
                    } else {
                        echo "<script>alert('Não foi possível excluir: " . $conn->error . "');</script>";
                        echo "<script>location.href='?page=listar';</script>";
                    }
                } else {
                    echo "<script>alert('ID do usuário não especificado');</script>";
                    echo "<script>location.href='?page=listar';</script>";
                }
                break;
        }

    
    
    
    
    