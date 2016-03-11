<?php
/*
header controller
**/

class headerController extends Controller{
    public function __construct(){
        
        echo $this->render('Views/headerView.php', array('title'=>'BigCityApps',0));
        
    }
}