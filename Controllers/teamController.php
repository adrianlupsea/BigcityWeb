<?php


class teamController extends Controller{
    
   private $team;
    
    public function __construct(){
        
        $obj =new teamModel;
        $this->team = $obj->getteam();
  
        
        foreach ($this->team as $linkuriItem){
            echo $this->render(V."teamView.php",array('picture'=>$linkuriItem[2][0],'name'=>$linkuriItem[0][0],
                'descript'=>$linkuriItem[1][0]));
            
        }
       
        
    }
    
    
}
