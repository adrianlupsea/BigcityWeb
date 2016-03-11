<?php


    
class navController extends Controller{
    
   private $nav;
    
    public function __construct(){
        
        /*$obj =new navModel;
        $this->nav = $obj->getnav();
        
       
  //var_dump($this->nav);
        
        foreach ($this->nav as $linkuriItem){
            echo $this->render(V."navView.php",array('like'=>$linkuriItem[1][0]));
            
        }*/
       

       echo $this->render(V."navView.php",0/*array('like'=>$linkuriItem[1][0])*/);
        
    }
    
    
}

