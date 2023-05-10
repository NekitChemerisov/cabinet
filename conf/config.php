<?php
//echo $_SERVER['DOCUMENT_ROOT'];
session_start();

define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define("CONTROLLER_PATH", ROOT."/controllers/");
define("VIEW_PATH", ROOT."/views/");
define("MODEL_PATH", ROOT."/models/");

require_once('db.php');
require_once('route.php');
require_once MODEL_PATH. 'Model.php';
require_once VIEW_PATH. 'View.php';
require_once CONTROLLER_PATH. 'Controller.php';

Routing::buildRoute();