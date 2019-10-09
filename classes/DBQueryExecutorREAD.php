
<?php

  class DBQueryExecutorREAD
  {
    private $res;
    private $dbh;

      
      function __construct($dbh, $sql)
      {
        $this->dbh = $dbh;
        //$prepared =$dbh->prepare($sql);
     $dbh->execute($sql);
     $res = $dbh->fetchAll(PDO::FETCH_ASSOC);
     $this->res = $res;
    
      }
      public function read()
      {
        return $this->res;
      }
/*
      public function read()
      {
          return $this->res;
      }
      public function insert($sql)
      {
          $prepared =$this->dbh->prepare($sql);
          $prepared->execute();
          echo "inserted successfully<br>";
      }
      public function update($sql)
      {
          $prepared =$this->dbh->prepare($sql);
          $prepared->execute();
          echo "edited successfully<br>";
      }
      public function delete($sql)
      {
          $prepared =$this->dbh->prepare($sql);
          $prepared->execute();
          echo "deleted successfully<br>";
      }

      */
  } 