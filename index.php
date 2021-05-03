<?php
// initialisation des routes
require_once($_SERVER["DOCUMENT_ROOT"] . "/controller/Route.php");
Route::initRoutes();

// Récupération du controller
require_once($_SERVER["DOCUMENT_ROOT"] . "/controller/Controller.php");

if (isset($_POST["nid"])) {
  Model::updateNode();
}

if (isset($_POST["create_node"])) {
  Model::addNode();
}

if (isset($_GET["delete_node"])) {
  Model::deleteNode();
}

// Récupération des données venant de la base de données via une requête préparée
$req = Model::getAllNodes();

// Vérification de la route en cours (demandée par l'internaute)
$route = Route::check();

// Si ma route n'est pas nulle, alors, je m'en sers 
if ($route) {
  // Je vais chercher les infos dans la base de données
  $controller_method = $route["controller_method"];
  $GLOBALS["data"] = Controller::$controller_method();

  // Appel du template
  require_once($_SERVER["DOCUMENT_ROOT"] . "/view/" . $route["view_name"]);
} else {
  require_once($_SERVER["DOCUMENT_ROOT"] . "/view/accueil.php");
}
