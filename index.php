<?php 
    //require_once "src/utils/FlashMessage.php";
    include_once "src/partials/_verify_auth.php";
    include_once "src/partials/_head.php"; 
    include_once "src/partials/_header.php";
?>

<form id="form1" action="fila/processos.php" method="POST">
    <div class="form-group row">
        <label for="n1" class="col-sm-3 col-form-label">Quantidade de Processos</label>
        <div class="col-sm-8">
        <input type="number" class="form-control" id="n1" placeholder="exemplo:25" name="qp" required>
        </div>
    </div>
    <div class="col-md-6 offset-md-4 text-center">
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
</form>