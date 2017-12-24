<?php
if(isset($_POST['post'])){
  $query->insertOne("posts", $_POST['post']);
  echo $_POST['post'];
}

 ?>
