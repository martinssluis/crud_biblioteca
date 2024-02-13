<h1>Editar Funcionário</h1>
<?php
if (isset($_GET['id_funcionario'])) {
    $id_funcionario = $_GET['id_funcionario'];
    $sql = "SELECT * FROM funcionario WHERE id_funcionario=" . $id_funcionario;
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=atendente-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_funcionario" value="<?php echo $row->id_funcionario; ?>">
    <div class="mb-3">
        <label>Nome do Funcionário</label>
        <input type="text" value="<?php echo $row->nome_funcionario; ?>" name="nome_funcionario" class="form-control">
    </div>
    <div class="mb-3">
        <label>CPF do Funcionário</label>
        <input type="text" value="<?php echo $row->cpf_funcionario; ?>" name="cpf_funcionario" class="form-control">
    </div>
    <div class="mb-3">
        <label>Telefone do Funcionário</label>
        <input type="text" value="<?php echo $row->fone_funcionario; ?>" name="fone_funcionario" class="form-control">
    </div>
    <!-- Adicione outros campos adicionais conforme necessário -->

    <div class="mb-3">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>
<?php
} else {
    echo "ID de funcionário não especificado.";
}
?>
