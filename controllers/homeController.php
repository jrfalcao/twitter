<?php
/**
 * Description of homeController
 *
 * @author junior
 */
class homeController extends controller{
    
    public function index(){
        
        $dados = array();
        
        $this->loadTemplate("home", $dados);
        
    }
    
}
