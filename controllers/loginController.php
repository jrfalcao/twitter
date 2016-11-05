<?php
/**
 * Description of loginController
 *
 * @author junior
 */
class loginController extends controller{
    
    public function index() {
        
        $this->loadView("login");
        
    }
    
    public function cadastro() {
        $dados = array();
        if(!empty($_POST['nome']) && isset($_POST['nome']) ){
            $dados = filter_input_array(INPUT_POST, $_POST,FILTER_SANITIZE_STRING);
            var_dump($dados);
            die;
        }
        $this->loadView('cadastro', $dados);
    }
}
