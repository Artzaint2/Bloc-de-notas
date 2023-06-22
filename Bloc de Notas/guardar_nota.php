<?php
if (isset($_POST['nota'])) {
    $nota = $_POST['nota'];
    $nombre_archivo = date('Y-m-d_H-i-s') . '.txt';
    $archivo = fopen($nombre_archivo, "w");
    fwrite($archivo, $nota);
    fclose($archivo);
}
header("Location: index.php");
exit();
?>
