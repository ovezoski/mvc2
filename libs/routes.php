<?php
$router = new Router;

  $router->get("", "/controllers/home.controller.php");
  $router->get("teams", "/controllers/teams.controller.php");
  $router->post("post", "controllers/posts.controller.php")
  ?>
