<?php

include '../Models/DBModel.php';
$query = "SELECT name,content,comentator FROM coment;";
          //  ."where url IS NOT NULL";// preia numele meniurilor din DBModel
    $a=new DBModel;
  $result = $a->db()->query($query); 
 
  
  $counter=0;
  if($result){
   foreach($result as $val){
     $persoane[]=array($val['name']);
     $linkuri[] =array($val['content']);
     $com[] =array($val['comentator']);
     $counter++;
   }
  }
  for($i=0;$i<$counter;$i++)
 {
          $colegi[$i][0]= $persoane[$i];
          $colegi[$i][1]= $linkuri[$i];
          $colegi[$i][2]= $com[$i];
  }
  header('Content-Type: application/json');
  echo json_encode($colegi);