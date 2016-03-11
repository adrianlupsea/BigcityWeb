<?php

class proiectModel extends DBModel
{
 public function getproiect(){

  $query = "SELECT `nume`, `descriere`, `link`, `poza` FROM `proiecte` ;";
          
  $result = $this->db()->query($query); 
 
  
  $counter=0;
  if($result){
   foreach($result as $val){
     $persoane[]=array($val['nume']);
     $linkuri[] =array($val['descriere']);
     $poze[]=array($val['poza']);
     $leg[]= array($val['link']);
     $counter++;
   }
  }
  for($i=0;$i<$counter;$i++)
 {
          $colegi[$i][0]= $persoane[$i];
          $colegi[$i][1]= $linkuri[$i];
          $colegi[$i][2]= $poze[$i];
          $colegi[$i][3]= $leg[$i];
  }
  
  return $colegi ;
 }

}