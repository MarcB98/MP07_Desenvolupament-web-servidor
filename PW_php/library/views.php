<?php

class Views
{
    
    function render($controller, $view){
        $controller = get_class($controller);
        require VIEWS.DFT."head.html";
        require VIEWS.$controller.'/'.$view.'.html';
        require VIEWS.DFT.'footer.html';
    }

}


?>