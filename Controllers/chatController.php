<?php
/*
header controller
**/

class chatController extends Controller{
    public function __construct(){
        echo $this->render('chat/index.php', array(0));
       
    }
}