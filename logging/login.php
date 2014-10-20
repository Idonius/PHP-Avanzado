<?php
ob_start();
require_once('vendor/autoload.php');
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
header('Content-Type: text/html; charset=utf-8');

$log = new Logger('usuarios');
$log->pushHandler(new StreamHandler(__DIR__.'/../var/logs/usuarios.log'));

$usuario = "achavez";
$contrasena = "test123";

$u = $_POST['usuario'];
$p = $_POST['contrasena'];

if(($u === $usuario) && ($p === $contrasena)){
    $log->addInfo('Usuario '.$usuario.' inició sesión');
    echo "Bienvenido ".$u;
} else {
    echo "Nombre de usuario o contraseña incorrectos";
}

ob_flush();
exit;