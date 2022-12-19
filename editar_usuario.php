<h1>Editar Usuários</h1>

<?php

$sql = "SELECT * FROM usuários WHERE id=" .$REQUEST["id"];

$res = $conexao->query($sql);

$row = $res->fetch_object();

?>

<form action="?page-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id ?>">

    <div class ="mb-3">
        <label>Nome</label>
        <imput type="text" name="nome" class="form-control" value="<?php print $row->nome;?>">
    </div>

<div class ="mb-3">
        <label>E-mail</label>
        <imput type="text" email="email" class="form-control" value="<?php print $row->email;?>">
</div>


<div class ="mb-3">
        <label>Senha</label>
        <imput type="password" name="senha" class="form-control" maxlength=8 required>
</div>


<div class ="mb-3">
        <label>Data de Nascimento</label>
        <imput type="text" name="data-nasc" class="form-control" value="<?php print $row->data_nasc; ?>">
</div>

<div class="mb-3">
    <button class="btn btn-primary" type ="submit">Enviar</button>
</div>


