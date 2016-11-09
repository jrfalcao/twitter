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
        $dados = array(
            'nome'=> ''
        );
        $p = new posts();
        if(isset($_POST['msg']) && !empty($_POST['msg'])){
            $msg = addslashes(filter_input(INPUT_POST,'msg'));
            $p->inserirPost($msg);
        }
        $u = new usuarios($_SESSION['twlg']);
        $dados['nome'] = $u->getNome();
        $dados['qt_seguidos'] = $u->countSeguidos();
        $dados['qt_seguidores'] = $u->countSeguidores();
        $dados['sugeridos'] = $u->getUsuarios(5);
        
        $lista = $u->getSeguidos();
        $lista[] = $_SESSION['twlg'];
        $dados['feed'] = $p->getFeed($lista,10);
        
        $this->loadTemplate("home", $dados);
    }
    
    public function seguir($id) {
        if (!empty($id)) {
            $id = addslashes($id);
            $u = new usuarios($id);
            if(NULL !== $u->getNome()){
                $r = new relacionamentos();
                $r->seguir($_SESSION['twlg'],$id);
            }
        }
        header("Location: /twitter");
    }
    
    public function deseguir($id) {
        if (!empty($id)) {
            $id = addslashes($id);
            $u = new usuarios($id);
            if(NULL !== $u->getNome()){
                $r = new relacionamentos();
                $r->deseguir($_SESSION['twlg'],$id);
            }
        }
        header("Location: /twitter");
    }
    
}
