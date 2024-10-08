<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

$stmt->bindParam(":ID", $id);

$stmt->execute(array($id));

//$conn->rollback();    //CANCELA A TRANSAÇÃO
$conn->commit();        //APROVA A TRANSAÇÃO

echo "Excluido com sucesso!";

 ?>