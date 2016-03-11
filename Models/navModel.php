<?php



class navModel extends DBModel
{
 public function getnav(){

  $query = "SELECT `like` FROM likeuri;";
  $result = $this->db()->query($query);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      
      $fli[0]=array($row["like"]);
      }
  }
  $colegi[1][1]=$fli[0];
    return $colegi;
  }
}