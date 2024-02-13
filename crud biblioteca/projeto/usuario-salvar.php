<?php 
    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $sql = "INSERT INTO usuario(
                                nome_usuario,
                                cpf_usuario,
                                data_nasc_usuario,
                                email_usuario

                                ) 
                                VALUES(
                                    '".$_POST['nome']."',
                                    '".$_POST['cpf']."',
                                    '".$_POST['data_nasc_usuario']."',
                                    '".$_POST['email']."'

                                )";

            $res = $conn->query($sql);
            if($res==true){
            print "<script>alert('Cadastro Efetuado');</script>";
            print "<script>location.href='?page=usuario-listar'</script>";
            }else{
            print "<script>alert('Falha no cadastro')</script>";
            print "<script>location.href='?page=usuario-listar'</script>";
            }
            break;

        case 'editar':
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $data_nasc= $_POST['data_nasc'];
            $email = $_POST['email'];

            $sql = "UPDATE usuario SET
                        nome_usuario = '{$nome}',
                        cpf_usuario = '{$cpf}',
                        data_nasc_usuario = '{$data_nasc}',
                        email_usuario = '{$email}'

                        WHERE id_usuario = ".$_REQUEST['id'];


            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=usuario-listar'</script>";
            }else{
                print "<script>alert('Falha ao editar')</script>";
                print "<script>location.href='?page=usuario-listar'</script>";
            }
            break;

        case 'excluir':
                $sql = "DELETE FROM usuario WHERE id_usuario=".$_REQUEST['id'];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Excluido com sucesso');</script>";
                print "<script>location.href='?page=usuario-listar'</script>";
            }else{
                print "<script>alert('Falha ao Excluir')</script>";
                print "<script>location.href='?page=usuario-listar'</script>";
            }
            break;
    }

?>