<h1>Listar Empréstimo</h1>
<?php 
         
         $sql = "SELECT * FROM emprestimo AS e
             INNER JOIN livro AS l
                ON e.livro_id_livro = l.id_livro
             INNER JOIN usuario AS u
                ON e.usuario_id_usuario = u.id_usuario
             INNER JOIN funcionario AS f
                ON e.funcionario_id_funcionario = f.id_funcionario";

         $res = $conn->query($sql);

         $qtd = $res->num_rows;

             if($qtd > 0)
             {
                
                 print "<table class='table table-hover table-striped table-bordered'>";
                 print "<tr>";
                 print "<th>Nome do Livro</th>";
                 print "<th>Nome do Usuário</th>";
                 print "<th>Nome do funcionario</th>";
                 print "<th>Data de Empréstimo</th>";
                 print "<th>Data de Devolução</th>";
                 print "<th>Ações</th>";
                 print "</tr>";

             while($row = $res->fetch_object())
             {   

                 print "<tr>";
                 print "<td>$row->titulo_livro</td>";
                 print "<td>$row->nome_usuario</td>";
                 print "<td>$row->nome_funcionario</td>";
                 print "<td>$row->data_emprestimo</td>";
                 print "<td>$row->data_devolucao</td>";
                 print "<td>

                     <button onclick=\"location.href='?page=emprestimo-editar&livro_id_livro=".$row->id_livro."&usuario_id_usuario=".$row->id_usuario."&funcionario_id_funcionario=".$row->id_atendente."';\" class='btn btn-success'>Editar</button>
                     <button onclick=\"if(confirm('Tem certeza que deseja excluir?'))
                         {
                             location.href='?page=emprestimo-salvar&acao=excluir&id_livro=".$row->livro_id_livro."&id_usuario=".$row->usuario_id_usuario."&id_funcionario=".$row->funcionario_id_funcionario."';
                         }
                             else
                         {
                             false;
                         }
                            
                         \" class='btn btn-danger'>Excluir</button>
                     </td>";
            
                 print "</tr>";
                
             }

             }

             else

             {

                 print "<p class='alert alert-danger'>Nenhum resultado encontrado</p>";
                
             }
     ?>