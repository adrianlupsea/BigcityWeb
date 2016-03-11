<?php

class menuModel extends DBModel
{
 public function getMenu(){

  $query = "SELECT `name` FROM menu;";// preia numele meniurilor din DB
  $result = $this->db()->query($query); 
  
  if($result){
     foreach($result as $key=>$val){
      //$manuNames[] = $val['name']; varianta alternativa pentru acest caz.
       foreach($val as $key2=>$nume){
      $menuNames[] = $nume;
     }

  }
  
  //echo "<pre>";
 //var_dump($menuNames);
 return $menuNames;
    }

   }
   
 }