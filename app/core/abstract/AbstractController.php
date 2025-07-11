<?php

    namespace App\Core\Abstract;
      
    abstract class AbstractController
 {
     protected string $layout='base.layout.php';
    protected function render($template, $params = [])
    {
        extract($params);
        ob_start();
         require_once __DIR__ . '/../../../template/' . $template . '.php';
         $content = ob_get_clean();
         require_once __DIR__ . '/../../../template/layout/'.$this->layout; 
    }
}