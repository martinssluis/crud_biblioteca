<h1>Cadastrar Usuário</h1>
<form action="?page=usuario-salvar" method="POST">  
         <input type="hidden" name="acao" value="cadastrar">

             <div class="mb-3">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control" required>
    
             </div>

             <label>Data de nascimento</label>
             <input type="date" name="data_nasc" class="form-control" required>

             <div class="mb-3">

             <label>Email</label>
             <input type="text" name="email" class="form-control" required>
             
             </div>

             <div class="mb-3">

             <div class="mb-3">
                <label>CPF</label>
                <input type="number" name="cpf" class="form-control" required>
             
               </div>
             

             <div class="mb-3">

             <button class="btn btn-primary">Enviar</button>
             </div>
    </form>