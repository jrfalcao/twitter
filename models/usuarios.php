<?php

/**
 * Description of usuarios
 *
 * @author junior
 */
class usuarios extends model {

    public function isLogged() {
        if (isset($_SESSION['twlg']) && !empty($_SESSION['twlg'])) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function inserirUsuario($nome,$email,$senha) {
        $sql = $this->db->prepare("INSERT INTO usuarios SET nome=?, email=?, senha=?");
        $sql->execute([$nome,$email,$senha]);
        
        return $this->db->lastInsertId();
    }
    
    public function usuarioExiste($email) {
        $sql = "SELECT * FROM usuarios WHERE email='$email'";
        $sql = $this->db->query($sql);
        if($sql->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }
    
    public function fazerLogin($email,$senha) {
        $sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
        $sql = $this->db->query($sql);
        if($sql->rowCount() > 0){
            $sql = $sql->fetch();
            $_SESSION['twlg'] = $sql['id'];
            return true;
        }else{
            return false;
        }
    }
}
