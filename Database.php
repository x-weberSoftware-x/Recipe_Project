<?php

class Database{

  public $connection;

  /**
   * Constructor for database class
   * 
   * @param array $config
   */
  public function __construct($config){

    //the dsn is the host, port, db name etc
    $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']}";

    //array to set pdo options to use later 
    $options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ];

    //try to connect
    try {
      $this->connection = new PDO($dsn, $config['username'], $config['password'], $options);
    } catch (PDOException $e) {
      throw new Exception("Database connection failed: {$e->getMessage()}");
    }
  }

  /**
   * Query the database
   * 
   * @param string $query
   * @return PDOStatement
   * @throws PDOException
   */
  public function query($query){

    try {
      //prepare the statement for execution
      $stmnt = $this->connection->prepare($query);
      //execute the statement
      $stmnt->execute();
      return $stmnt;
    } catch (PDOException $e) {
      throw new Exception("Query failed to execute: {$e->getMessage()}");
    }
  }

}