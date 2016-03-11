<?php
/*class articleController extends Controller{
    public function __construct(){
        echo $this->render('Views/articleView.php', array('article'=>'Continutul Articolului'));
    }
}
*/

class articleController extends Controller{
    
   private $article;
    
    public function __construct(){
        
        $obj =new articleModel;
        $this->article = $obj->getarticle();
  
        
        foreach ($this->article as $linkuriItem){
            echo $this->render(V."articleView2.php",array('articles'=>$linkuriItem[1][0],'titlu'=>$linkuriItem[0][0]));
            
        }
       
        
    }
    
    
}
