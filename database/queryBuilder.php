<?php

class queryBuilder
{

  public $pdo;

  function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  public function selectAll($table)
  {
    $query = $this->pdo->prepare("SELECT * FROM {$table}");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_CLASS);
  }
  public function insertOne($table, $text)
  {
    $query = $this->pdo->prepare("INSERT INTO :table values text = :text");

    if(

    $query->execute(
      array(
        ":table"=> $table,
        "text" => $text
      ))

    ){

    }else{

    }
  }

}


 ?>
