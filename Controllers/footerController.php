<?php
/*
header controller
**/

class footerController extends Controller{
    public function __construct(){
        echo $this->render('Views/footerView.php', array(0));
       
    }
}