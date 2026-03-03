<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM cadastros WHERE id = ?");
    $stmt->execute([$id]);
    $registro = $stmt->fetch(PDO::FETCH_ASSOC);

}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $senha = $_POST['pass'];
    $endereco = $_POST['endereco'];
    $complemento = $_POST['complemento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    try {
        $sql = "UPDATE cadastros SET nome=?, telefone=?, email=?, senha=?, endereco=?, complemento=?, cidade=?, estado=? WHERE id=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nome, $tel, $email, $senha, $endereco, $complemento, $cidade, $estado, $id]);

    
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}

if(isset($_POST['envio'])){
    header("location: listar.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">
            <h3 class="card-title mb-4">Editar Informações</h3>
            
            <form action="" method="POST" class="row g-3">
                <input type="hidden" name="id" value="<?= $registro['id'] ?>">

                <div class="col-md-6">
                    <label class="form-label">Nome</label>
                    <input name="nome" type="text" class="form-control" value="<?= $registro['nome'] ?>" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Telefone</label>
                    <input name="tel" type="text" class="form-control" value="<?= $registro['telefone'] ?>" required>
                </div>

                <div class="col-md-12">
                    <label class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" value="<?= $registro['email'] ?>" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Senha</label>
                    <input name="pass" type="password" class="form-control" value="<?= $registro['senha'] ?>" required>
                </div>

                <div class="col-12">
                    <label class="form-label">Endereço</label>
                    <input name="endereco" type="text" class="form-control" value="<?= $registro['endereco'] ?>" required>
                </div>

                <div class="col-12">
                    <label class="form-label">Complemento</label>
                    <input name="complemento" type="text" class="form-control" value="<?= $registro['complemento'] ?>">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Cidade</label>
                    <input name="cidade" type="text" class="form-control" value="<?= $registro['cidade'] ?>" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Estado</label>
                    <select name="estado" class="form-select" required>
                        <option value="Ceará" <?= ($registro['estado'] == 'Ceará') ? 'selected' : '' ?>>Ceará</option>
                        <option value="São Paulo" <?= ($registro['estado'] == 'São Paulo') ? 'selected' : '' ?>>São Paulo</option>
                        <option value="Acre" <?= ($registro['estado'] == 'Acre') ? 'selected' : '' ?>>Acre</option>
                    </select>
                </div>

                <div class="col-12 mt-4 text-center">
                    <button type="submit" class="btn btn-primary px-5" name="envio">Salvar Alterações</button>
                    <a href="index.php" class="btn btn-outline-secondary px-5">Cancelar</a>
                </div>
            </form>
            
        </div>
    </div>
</div>

</body>
</html>