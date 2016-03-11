<?php

class teamModel extends DBModel
{
 public function getteam(){

  $query = "SELECT name, descript, pic FROM team;";
          
  $result = $this->db()->query($query); 
 
  
  $counter=0;
  if($result){
   foreach($result as $val){
     $persoane[]=array($val['name']);
     $linkuri[] =array($val['descript']);
     $poze[]=array($val['pic']);
     $counter++;
   }
  }
  for($i=0;$i<$counter;$i++)
 {
          $colegi[$i][0]= $persoane[$i];
          $colegi[$i][1]= $linkuri[$i];
          $colegi[$i][2]= $poze[$i];
  }
  
  return $colegi ;
 }

}