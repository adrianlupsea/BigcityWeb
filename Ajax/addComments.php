<?php
session_start();
include '../Models/DBModel.php';
                    
    $a=new DBModel;
   
    $query = "INSERT INTO `coment`(`name`, `content`,`comentator`) VALUES ('".$_POST["x"]."','".$_POST["y"]."','".$_SESSION["logare"]."')";
    
$rs = $a->db()->query($query);      
