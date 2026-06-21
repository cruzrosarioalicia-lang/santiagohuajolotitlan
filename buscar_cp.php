<?php
include("../includes/conexion.php");

$cp = isset($_GET['cp']) ? $_GET['cp'] : ''; // Recibe el código postal desde la URL

if(strlen($cp) != 5){
    echo json_encode([]);
    exit;
}

$sql = "SELECT d_asenta, D_mnpio, d_estado FROM codigos_postales WHERE d_codigo = ?";

$stm = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stm, "s", $cp);
mysqli_stmt_execute($stm);

$resultado = mysqli_stmt_get_result($stm);

$colonias = [];
$municipio = "";
$estado = "";

while($row = mysqli_fetch_assoc($resultado)){
    $colonias[] = $row['d_asenta'];
    $municipio = $row['D_mnpio'];
    $estado = $row['d_estado'];
}

echo json_encode([
    "colonias" => $colonias,
    "municipio" => $municipio,
    "estado" => $estado
]);
?>