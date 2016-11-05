<?php
/**
 * Description of loginController
 *
 * @author junior
 */
class loginController extends controller{
    
    public function index() {
        if(!empty($_POST['email']) && isset($_POST['email'])){
            
            $email = addslashes(filter_input(INPUT_POST, 'email'));
            $senha = md5(filter_input(INPUT_POST, 'senha'));
            $u = new usuarios();
            if ($u->fazerLogin($email,$senha)) {
                header("Location: /twitter");
            }
        }
        
        $this->loadView("login");
    }
    
    public function cadastro() {
        $dados = array('aviso'=>'');
        if(!empty($_POST['nome']) && isset($_POST['nome']) ){
            //$dados = filter_input_array(INPUT_POST, $_POST);
            $nome = addslashes(filter_input(INPUT_POST, 'nome'));
            $email = addslashes(filter_input(INPUT_POST, 'email'));
            $senha = md5(filter_input(INPUT_POST, 'senha'));
            
            if(!empty($nome) || !empty($email) || !empty($senha)) {
                $u = new usuarios();
                if (!$u->usuarioExiste($email)) {
                    
                    $_SESSION['twlg'] = $u->inserirUsuario($nome,$email,$senha);
                    header("Location: /twitter");
                    
                }  else {
                    $dados['aviso'] = 'Este usuário já existe';
                }   
            }else{
                $dados['aviso'] = 'Favor preencher todos os campos!!!';
            }
        }
        $this->loadView('cadastro', $dados);
    }
    
    public function logout() {
        unset($_SESSION['twlg']);
        header("Location: /twitter");
    }
}
