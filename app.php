
<?php

return [
  "url-start" => "/phpheroku/index",
  "url" => str_replace("/phpheroku/index/", "", parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH) ),
  "method" => $_SERVER["REQUEST_METHOD"]

]

 ?>
