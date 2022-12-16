<?php

    swhitch($REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = ["senha"];
            $data_nasc = ["data_nasc"];

            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";

            $res = $conexao->query($sql);

            break;

            case "editar":

            break;
            case "excluir":

            break;
    }

    ?>