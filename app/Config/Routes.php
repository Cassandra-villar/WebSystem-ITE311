<?php
use App\Controllers\StudentController;

$routes->get('students', [StudentController::class, 'index']);
$routes->get('students/create', [StudentController::class, 'create']);
$routes->post('students/store', [StudentController::class, 'store']);
$routes->get('students/delete/(:num)', [StudentController::class, 'delete/$1']);