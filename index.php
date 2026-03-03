
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Cadastro</title>
</head>
<body>
<style>
    div {
        max-width: 100%;
    }

    .listar{
        text-decoration: none;
        color: black;
        position: relative;
        left: 20px;
    }
    
    
</style>

        <div class="container text-center">
  <div class="row">
  <div class = "col"></div>
        <form class="row g-3" action="data.php" method="POST" >
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Nome</label>
        <input name= "nome" type="text" class="form-control" id="inputNome4" required>
    </div>
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Telefone</label>
        <input name= "tel" type="text" class="form-control" id="inputNome4" required>
    </div>
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input name= "email" type="email" class="form-control" id="inputEmail4" required>
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Senha</label>
        <input name= "pass" type="password" class="form-control" id="inputPassword4"  required>
    </div>
    <div class="col-12">
        <label for="inputAddress" class="form-label">Endereço</label>
        <input name= "endereco"type="text" class="form-control" id="inputAddress" placeholder="1234 Rua Principal" required>
    </div>
    <div class="col-12">
        <label for="inputAddress2" class="form-label">Complemento</label>
        <input name= "complemento" type="text" class="form-control" id="inputAddress2" placeholder="Apartmento, estudio, ou andar">
    </div>
    <div class="col-md-6">
        <label for="inputCity" class="form-label">Cidade</label>
        <input name= "cidade" type="text" class="form-control" id="inputCity" required>
    </div>
    <div class="col-md-6">
        <label for="inputState" class="form-label">Estado</label>
        <select name ="estado" id="inputState" class="form-select" required>
        <option selected>Choose...</option>
        <option>Ceará</option>
        <option>São Paulo</option>
        <option>Acre</option>
        </select>
    </div>
    <div class="col-12">
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary" name = "send">Sign in</button>
  </div>
</div>
</form>
    </div>

    <a class="listar" href="listar.php">Exibir registros</a>

</body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</html>