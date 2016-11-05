<?php
/**
 * Description of homeController
 *
 * @author junior
 */
class homeController extends controller{
    
    public function __construct() {
        $u = new usuarios();
        if(!$u->isLogged()){
            header("Location: login");
        }
    }

    
    public function index(){
        
        $dados = array();
        
        $this->loadTemplate("home", $dados);
        
    }
    
}
