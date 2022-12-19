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
                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $senha = ["senha"];
                $data_nasc = ["data_nasc"];

                $sql = "UPDATE usuarios SET
                nome='{nome}',
                email='{email}',
                senha='{senha',
                data_nasc='{data_nasc}';

                WHERE
                    id=" .$REQUEST["id"];

                    $res = $conexao->query($sql);

                    if($res==true){
                        print "<script>alert('Usuário Editado com Sucesso');</script>;"
                        print "<script>al"
                    }
            break;
            case "excluir":

                $sql = "DELETE FROM usuarios WHERE id=".$REQUEST["id"];

                $res = $conexao->query($sql);

                if($res==true{
                    print "<script>alert('Usuario excluido com sucesso');</script>";
                    print "<script>location.href='?page=listar';</script>";

                 }
                 else{
                    print "<script>alert('Não foi possível excluir');</script>"
                    print "<script>location.href='?page=listar';</script>";

                 }
                
            break;
    }

    ?>