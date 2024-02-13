<?php 

    switch ($_REQUEST['acao']){

                 case 'cadastrar':

                     $sql = "INSERT INTO atendente(
                        nome_atendente,
                        cpf_atendente,
                        email_atendente,
                        fone_atendente
                        ) 
                     
                     VALUES(
                        '".$_POST['nome_atendente']."', 
                        '".$_POST['cpf_atendente']."', 
                        '".$_POST['email_atendente']."', 
                        '".$_POST['fone_atendente']."')";

                    $res = $conn->query($sql);

                         if($res==true)
                         {

                         print "<script>alert('Cadastro Concluído com sucesso');</script>";
                         print "<script>location.href='?page=atendente-listar'</script>";

                         }

                         else

                         {

                             print "<script>alert('Falha no cadastro')</script>";
                             print "<script>location.href='?page=atendente-listar'</script>";

                         }

            break;

                 case 'editar':

                     $nome = $_POST['nome'];
                     $cpf = $_POST['cpf'];
                     $email = $_POST['email'];
                     $telefone = $_POST['telefone'];

                     $sql = "UPDATE atendente SET
                        
                         nome_atendente = '{$nome}',
                         cpf_atendente = '{$cpf}',
                         email_atendente = '{$email}',
                         fone_atendente = '{$telefone}' 

                            WHERE

                         id_atendente = ".$_REQUEST['id'];

                     $res = $conn->query($sql);

                         if($conn==true)

                         {
                         print "<script>alert('Sucesso ao Editar');</script>";
                         print "<script>location.href='?page=atendente-listar'</script>";
                         }

                        else

                         {    

                        print "<script>alert('Erro ao editar')</script>";
                        print "<script>location.href='?page=atendente-listar'</script>";

                         }

            break;

                 case 'excluir':
                     $sql = "DELETE FROM atendente WHERE id_atendente=".$_REQUEST['id'];

                     $res = $conn->query($sql);

                         if($res==true)

                         {                  
                         print "<script>alert('Excluido com sucesso');</script>";
                         print "<script>location.href='?page=atendente-listar'</script>";
                         }

                         else

                         {

                         print "<script>alert('Erro ao Excluir')</script>";
                         print "<script>location.href='?page=atendente-listar'</script>";

                         }
            break;
                        }

?>