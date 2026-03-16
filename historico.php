<?php
include "conexao.php";

$result = $conn->query("SELECT * FROM registros_checklist ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
<title>Histórico de Checklists</title>
<style>

body{
font-family:Arial;
background:#f0f0f0;
}

table{
width:100%;
border-collapse:collapse;
background:white;
}

th,td{
border:1px solid #000;
padding:8px;
}

th{
background:#ddd;
}

</style>
</head>

<body>

<h2>Checklists Preenchidos</h2>

<table>

<tr>
<th>ID</th>
<th>Responsável</th>
<th>Ambulância</th>
<th>Data</th>
<th>Hora</th>
<th>Ver</th>
</tr>

<?php while($row=$result->fetch_assoc()){ ?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['responsavel']; ?></td>
<td><?php echo $row['ambulancia']; ?></td>
<td><?php echo $row['data_check']; ?></td>
<td><?php echo $row['hora_inicio']; ?></td>

<td>

<a href="ver_checklist.php?id=<?php echo $row['id']; ?>">
Abrir
</a>

</td>

</tr>

<?php } ?>

</table>

</body>
</html>
