<?php
    include 'connect.php';
       
         $nome = trim($_POST['nome']);
         $tel = trim($_POST['tel']);
         $email = trim($_POST['email']);
         $pass = trim($_POST['pass']);
         $endereco = trim($_POST['endereco']);
         $complemento = trim($_POST['complemento']);
         $cidade = trim($_POST['cidade']);
         $estado = trim($_POST['estado']);

         $senhaSegura = password_hash($pass, PASSWORD_DEFAULT);

         $dados=[
            'nome' =>   $nome,
            'telefone' =>   $tel,
            'e-mail' =>   $email,
            'senha'  =>  $pass,
            'endereco' =>   $endereco,
            'cidade' =>   $cidade,
            'estado' =>   $estado

         ];
           foreach ($dados as $nomeDoCampo => $valor) {
        if (empty($valor)) {
            echo "<script>
                    alert('Por favor, preencha o campo: $nomeDoCampo');
                    window.location.href = 'index.php';
                  </script>";
            exit;
        }
    }

       try{
        $sql = "INSERT INTO cadastros(nome,telefone,email,senha,endereco,complemento,cidade,estado) VALUES(?,?,?,?,?,?,?,?)";
        $stmt = $pdo ->prepare($sql);
        $stmt->execute([$nome,$tel,$email,$senhaSegura,$endereco,$complemento,$cidade,$estado]);

         echo "<script>
                    alert('Cadastro completo');
                    window.location.href = 'index.php';
                  </script>";
       } catch (PDOException $e){
            echo'erro' . $e -> getMessage();
       }
 
?>