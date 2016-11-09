<?php
/**
 * Description of posts
 *
 * @author junior
 */
class posts extends model{
    
    public function inserirPost($msg) {
        $idusuario = $_SESSION['twlg'];
        $sql = "INSERT INTO posts SET id_usuario = '{$idusuario}', data = NOW(), post='{$msg}'";
        $sql = $this->db->query($sql);
    }
    
    public function getFeed($lista,$limit) {
        $array = array();
        if(count($lista) > 0){
            $sql = "SELECT *, (select nome from usuarios where usuarios.id = posts.id_usuario) as nome FROM posts WHERE id_usuario IN (".(implode(',',$lista)).") ORDER BY data DESC LIMIT {$limit}";
            $sql = $this->db->query($sql);
            
            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }
        }
        
        return $array;
    }
}
