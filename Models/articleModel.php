<?php

class articleModel extends DBModel
{
 public function getarticle(){

  $query = "SELECT name,content FROM articles;";
          
  $result = $this->db()->query($query); 
 
  
  $counter=0;
  if($result){
   foreach($result as $val){
     $persoane[]=array($val['name']);
     $linkuri[] =array($val['content']);
     $counter++;
   }
  }
  for($i=0;$i<$counter;$i++)
 {
          $colegi[$i][0]= $persoane[$i];
          $colegi[$i][1]= $linkuri[$i];
  }
  
  return $colegi ;
 }

}