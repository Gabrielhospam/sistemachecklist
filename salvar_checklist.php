<?php
include "conexao.php";

$responsavel = $_POST['responsavel'];
$ambulancia = $_POST['ambulancia'];
$data = $_POST['data'];
$hora_inicio = $_POST['hora_inicio'];
$hora_final = $_POST['hora_final'];
$dados = $_POST['dados'];

$sql = "INSERT INTO registros_checklist
(responsavel,ambulancia,data_check,hora_inicio,hora_final,dados)
VALUES
('$responsavel','$ambulancia','$data','$hora_inicio','$hora_final','$dados')";

$conn->query($sql);

echo "Checklist salvo com sucesso!";
?>
