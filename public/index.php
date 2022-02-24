<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\CitasController;
use Controllers\MainController;
use Controllers\LoginController;
use MVC\Router;

$router = new Router();

$router->get('/', [MainController::class, 'index']);
$router->get('/bachillerato', [MainController::class, 'bachillerato']);
$router->get('/bachillerato-modalidades', [MainController::class, 'bachilleratoModalidades']);
$router->get('/licenciaturas', [MainController::class, 'licenciaturas']);
$router->get('/licenciatura', [MainController::class, 'licenciatura']);
$router->get('/cita', [MainController::class, 'cita']);
$router->post('/cita', [MainController::class, 'cita']);

// Inicio de Sesión
$router->get('/iniciar-sesion', [LoginController::class, 'login']);
$router->post('/iniciar-sesion', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

// Citas
$router->get('/citas', [CitasController::class, 'index']);
$router->post('/citas/eliminar', [CitasController::class, 'eliminar']);

// Admin
$router->get('/admin', [MainController::class, 'index']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();