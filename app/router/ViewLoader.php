<?php

#router
class ViewLoader {
    protected $viewsPath = __DIR__ . '../../../views/';
   

    public function load($viewName) {

        if($viewName == 'error') {
            require 'views/error/404.php';

        }else{

            require($this->viewsPath . $viewName . '.php');

        }

        
    }
}
