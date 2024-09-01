<?php
include ("C:/Users/Matheus\MaiaProject/vendor/autoload.php");
use APP\model\Usuario;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$usuário = $_POST ['usuário'];
$senha = $_POST ['senha'];

$usuárionovo = new Usuario ($usuário, $senha);

if ($usuário == 'admin' && $senha == 'admin123'){ 
echo "<script>alert('Login com sucesso')</script>";
} else { 
echo "<script>alert('Algo está errado')</script>";
}
?>

