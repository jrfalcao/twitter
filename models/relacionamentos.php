<?php
/**
 * Description of relacionamentos
 *
 * @author junior
 */
class relacionamentos extends model{
    
    public function seguir($idseguidor, $idseguido) {
        $sql = $this->db->prepare("INSERT INTO relacionamentos SET id_seguidor=?, id_seguido=?"); 
        $sql->execute([$idseguidor,$idseguido]);
    }
    
    public function deseguir($idseguidor, $idseguido) {
        $sql = $this->db->prepare("DELETE FROM relacionamentos WHERE id_seguidor=? AND id_seguido=?");
        $sql->execute([$idseguidor,$idseguido]);
    }
    
}
