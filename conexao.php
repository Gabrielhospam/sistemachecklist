<?php

$host = "localhost";
$usuario = "SEU_USUARIO";
$senha = "SUA_SENHA";
$banco = "checklist_ambulancias";

$conn = new mysqli($host,$usuario,$senha,$banco);

if($conn->connect_error){
die("Erro de conexão: ".$conn->connect_error);
}

?>
