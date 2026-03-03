<?php
    include 'connect.php';
    $id = $_GET['id'];
try{

    $sql = "DELETE FROM cadastros WHERE id= ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    header("location: listar.php");
    
}catch (PDOException $e) {

    echo 'erru';
}
?>