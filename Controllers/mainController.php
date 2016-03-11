<?php

/** mainController is routing pages
 * 
 */
class mainController extends Controller
{
    protected $routes = array(    
                            'home'=>'homeController',
                            'login'=>'loginController',
                            'about'=>'aboutController',
                            'contact'=>'contactController'
                            );
                            
// de mofificat ffisierul astfel incat rutarea sa fie dinamica
// nume de controler dinamic
//citeste numele meniurilor
//this->$routes[]=array[$nume->$nume.'controller']
                            
    public function __construct(){
        $this->initialize();
    }
    
    protected function initialize(){
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }
        else $page = 'home';
        
        $filename = C.$this->routes[$page].'.php';
        
        if(file_exists($filename)){
            //require_once $page.'.php';
            new $this->routes[$page];
        }
        else {
            new errorController;
        }
    }
}