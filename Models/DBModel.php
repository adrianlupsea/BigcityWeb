<?php

class DBModel
{
 const  HOSTNAME = "localhost";
 const  MYSQLUSER = "root";
 const  MYSQLPASS = "";
 const  MYSQLDB = "bigcity";

 private $connection;

 public function db(){
  $this->connection = new mysqli(self::HOSTNAME,self::MYSQLUSER,self::MYSQLPASS,self::MYSQLDB);

  if($this->connection->connect_error){
   die("Conection ERROR! - ".$this->connection->connect_error);
  }
  else {
   /*echo "Connection succesful! <br/>";*/
  }

  return $this->connection;
 }

 public function close(){
  $this->connection->close();
 }
}