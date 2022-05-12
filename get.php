<?php
require_once 'conection.php';

$sql = "SELECT * FROM usuarios";
$resultado = pg_query($con, $sql);
$usuarios = pg_fetch_all($resultado, PGSQL_ASSOC);
echo $usuarios;

?>
