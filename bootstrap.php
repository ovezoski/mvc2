<?php

require "database/connect.php";
require "database/queryBuilder.php";
require "router.php";
$app = require "app.php";

$pdo = Connection::make();

$query = new queryBuilder($pdo);

require "libs/routes.php";
require $router->direct($app["url"], $app["method"]);



 ?>
