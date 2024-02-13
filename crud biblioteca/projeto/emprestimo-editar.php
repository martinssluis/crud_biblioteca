<h1>Editar Empréstimo</h1>
<?php 
         $sql = "SELECT * FROM emprestimo AS e
             INNER JOIN livro AS l
                ON e.livro_id_livro = l.id_livro
             INNER JOIN usuario AS u
                ON e.usuario_id_usuario = u.id_usuario
             INNER JOIN atendente AS f
                ON e.funcionario_id_funcionario = f.id_funcionario 
             WHERE e.livro_id_livro = l.id_livro AND e.usuario_id_usuario = u.id_usuario AND e.funcionario_id_funcionario = f.id_funcionario ;";

         $res = $conn->query($sql);
         $row = $res->fetch_object();
     ?>
    <form action="?page=emprestimo-salvar" method="POST">
             <input type="hidden" name="acao" value="editar">
             <input type="hidden" name="id_livro" value="<?php print $row->id_livro ?>">
             <input type="hidden" name="id_usuario" value="<?php print $row->id_usuario ?>">
             <input type="hidden" name="id_funcionario" value="<?php print $row->id_funcionario ?>">
                
         <div class="mb-3">

         <label>Livro</label>
         <select name="livro_id_livro" class="form-control" required>
         selected <option value="">Selecione o novo livro</option required>

     <?php 
            
         $sql = "SELECT * FROM livro";
         $res = $conn->query($sql);

             while($rows = $res->fetch_object())
             {
                print "<option value='".$rows->id_livro."'>";
                print $rows->titulo_livro."</option>";
            
             }
        
     ?>
         </select>
         </div>

         <div class="mb-3">

         <label>leitor</label>
         <select name="usuario_id_usuario" class="form-control" required>
         selected <option value="">Selecione o novo leitor</option required>

     <?php 
            
         $sql = "SELECT * FROM usuario";
         $res = $conn->query($sql);
           
             while($ro = $res->fetch_object())

             {
                print "<option value='".$ro->id_usuario."'>";
                print $ro->nome_usuario."</option>";

             }
        
     ?>
         </select>
         </div>

         <div class="mb-3">
         <label>funcionario</label>
         <select name="atendente_id_atendente" class="form-control" required>
         selected <option value="">Selecione o novo funcionario</option required>

     <?php 
            
         $sql = "SELECT * FROM funcionario";
         $res = $conn->query($sql);

             while($rown = $res->fetch_object())
             { 
                print "<option value='".$rown->id_funcionario."'>";
                print $rown->nome_funcionario."</option>";
             }
        
     ?>
         </select>
         </div>
         </select>
    
         <div class="mb-3">

         <label>Data do Emprestimo</label>
         <input type="date" name="dt_emprestimo" class="form-control" value="<?php print $row->data_emprestimo ?>" required>
        
         </div>

         <div class="mb-3">

         <label>Data de Devolução</label>
         <input type="date" name="dt_devolucao" class="form-control" value="<?php print $row->data_devolucao ?>" required>

         </div>

         <div class="mb-3">

         <button type="submit" class="btn btn-primary">Enviar</button>

         </div>
</form>
