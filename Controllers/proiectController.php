<?php

/*class proiectController extends Controller{
    public function __construct(){
        echo $this->render('Views/proiectView.php', array('proiect'=>'Continutul proiectului'));
    }
}*/


class proiectController extends Controller{
    
   private $proiect;
    
    public function __construct(){
        
        $obj =new proiectModel;
        $this->proiect = $obj->getproiect();
  
        
        foreach ($this->proiect as $linkuriItem){
            echo $this->render(V."proiectView.php",array('proiectTitlu'=>$linkuriItem[0][0],
                                                            'proiectDescript'=>$linkuriItem[1][0],
                                                            'proiectLink'=>$linkuriItem[3][0],
                                                            'proiectPic'=>$linkuriItem[2][0]));
            
        }
       
        
    }
    
    
}
