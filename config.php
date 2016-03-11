<?php

    define('M','Models/');
    define('V','Views/');
    define('C','Controllers/');
    


    function __autoload($classname){
        $filetype = strtolower($classname);
        
        // caut tipul fisierului 
        
        if(substr_count($filetype,'model')){
        $classfile = M.$classname.'.php';
        }
         if(substr_count($filetype,'view')){
        $classfile = V.$classname.'.php';
        }
         if(substr_count($filetype,'controller')){
        $classfile = C.$classname.'.php';
        }
        
        if(file_exists($classfile)){
            require_once $classfile;
        }
        else echo "<h1>File does't exist!</h1>";
    }
    
    function cacheStart(){
         echo __FILE__;
    
    
    
    
    if(file_exists($cacheFile) && time()-$cacheTime<filemtime($cacheFile)){
            echo "<p>Served from CACHE</p>";
            readfile($cacheFile);
            return 1;
        
        ob_start();
    }
        
        
    function cacheStop(){
        $cacheFile="cache/".basename(__FILE__,'.php').".html";
   
     $fis =fopen($cacheFile,"w");  // creaza fisierul sau daca exista deschidel
    file_put_contents($cacheFile,ob_get_contents());
    fclose($fis);
    ob_end_flush();
    }    
        
    }