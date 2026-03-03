<?php
    include 'connect.php';
    $sql = "SELECT * FROM cadastros ORDER BY id ASC";
    $stmt=$pdo->query($sql);

?>
<style>
    div {
        max-width: 100%;
    }

    .a{
        text-decoration: none;
        color: black;
        position: relative;
    }
    .volta{
        text-decoration: none;
        color: black;
        position: relative;
        left: 20px;
    }
</style>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Lista</title>
</head>
<body>
    <div class="row">
        <div class="col"></div>
            <div class="col-8">
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th scope= "col"> id </th>
                            <th scope= "col"> nome </th>
                            <th scope= "col"> email </th>
                            <th scope= "col"> telefone </th>
                            <th scope= "col"> Endereço </th>
                            <th scope= "col"> complemento</th>
                            <th scope= "col"> cidade </th>
                            <th scope= "col"> estado </th>  
                            <th scope= "col">Alterar</th>
                            <th scope= "col">Excluir</th>
                        </tr>
                        <?php
                            while($dado=$stmt->fetch()){
                        ?>
                            <tbody>
                                <tr>
                                    <th scope='row'> 
                                        <?php
                                        echo("{$dado['id']}")
                                        ?>
                                    </th>
                                    <th scope='row'> 
                                        <?php
                                        echo("{$dado['nome']}")
                                        ?>
                                    </th>
                                    <th scope='row'> 
                                        <?php
                                        echo("{$dado['email']}")
                                        ?>
                                    </th>
                                    <th scope='row'> 
                                        <?php
                                        echo("{$dado['telefone']}")
                                        ?>
                                    </th>
                                    <th scope='row'> 
                                        <?php
                                        echo("{$dado['endereco']}")
                                        ?>
                                    </th>
                                    <th scope='row'> 
                                        <?php
                                        echo("{$dado['complemento']}")
                                        ?>
                                    </th>
                                    <th scope='row'> 
                                        <?php
                                        echo("{$dado['cidade']}")
                                        ?>
                                    </th>
                                    <th scope='row'> 
                                        <?php
                                        echo("{$dado['estado']}")
                                        ?>
                                    </th>
                                    <th scope='row'><a class="a" href="alterar.php?id=<?php echo("{$dado['id']}")?>">Alterar</a></th>
                                    <th scope='row'><a  class="a" href="excluir.php?id=<?php echo("{$dado['id']}")?>">Excluir</a></th>
                                </tr>
                            </tbody>
                        <?php
                            }
                        ?>
                    </thead>
                </table>
         </div>
        <div class="col"></div>
    </div> 
    <a href="index.php" class="volta">Voltar registros</a>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</html>
