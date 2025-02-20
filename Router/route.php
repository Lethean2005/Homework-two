<?php
require_once "Router.php";
require_once "Controllers/BaseController.php";
require_once "Database/Database.php";
require_once "Controllers/WelcomeController.php";
require_once "Controllers/UserController.php";


$route = new Router();
$route->get("/", [WelcomeController::class, 'welcome']);

// User routes
$route->get("/users", [UserController::class, 'index']);
$route->get("/users/create", [UserController::class, 'create']);
$route->post("/users/store", [UserController::class, 'store']);
$route->get("/users/edit/{id}", [UserController::class, 'edit']);
$route->put("/users/update/{id}", [UserController::class, 'update']);
$route->delete("/users/delete/{id}", [UserController::class, 'delete']);
$route->get("/users/login", [UserController::class, 'login']);
$route->post("/users/authenticate", [UserController::class, 'authenticate']);
$route->get ("/users/logout", [UserController::class, 'logout']);

$route->route();