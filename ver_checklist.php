<?php
include "conexao.php";

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM registros_checklist WHERE id=$id");

$row = $result->fetch_assoc();
?>

<h2>Checklist Ambulância</h2>

Responsável: <?php echo $row['responsavel']; ?><br>
Ambulância: <?php echo $row['ambulancia']; ?><br>
Data: <?php echo $row['data_check']; ?><br>
Hora início: <?php echo $row['hora_inicio']; ?><br>
Hora final: <?php echo $row['hora_final']; ?><br>

<hr>

<table border="1">

<?php echo $row['dados']; ?>

</table>
