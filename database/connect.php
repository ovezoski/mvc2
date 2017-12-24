<?php

class Connection
{

  public static function make()
  {

    try{
      return new PDO("mysql:hsost=localhost;dbname=mvc", "root", "" );

    }catch(PDOException $e){
      die(var_dump($e));
    }

  }

}





 ?>
