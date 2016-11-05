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
        }  else {
            return FALSE;
        }
    }
}
