<?php


class CLogin{

    /**
     * Effettua il login con username e password dati in input dall'utente con
     * una chiamata ajax. Il risultato del Login (true/false) è passato indietro 
     * allo script di login.
     */
    public function manageLogin(){
            $View=USingleton::getInstance('View');
            $USession=USingleton::getInstance('USession');
            $FLogin=USingleton::getInstance('FLogin');
            
            $user=$View->get('user');
            $pass=$View->get('pass');
            $remember=$View->get('remember');
            
            $USession->keepAccess($remember);
            if($FLogin->checkUser($user,$pass)) {

                $USession->login($user,$pass);
                echo "true";
                exit;
            }

            else  {//user o pass non corretti
                echo "false";
                exit;
            }
    }

    /**
     * Si attiva in seguito a una chiamata ajax e effettua
     * il logout dell'utente dall'attuale sessione, cancellando anche
     * eventuali cookie
     */
    public function logout(){
            $USession=Usingleton::getInstance('USession');
            $USession->logout();
    }
        
    /**
     * Controlla se l'attuale utente ha effettuato il login
     * 
     * @return boolean true se l'utente è salvato nella sessione, false altrimenti
     */
    public function checkLoggedIn(){
        $USession=USingleton::getInstance('USession');

        if ( $USession->get('username') ){
            return true;
        }
        else {
            return false;
        }
    }
    
    /**
     * Risponde a una chiamata ajax che controlla se l'utente ha effettuato il 
     * login. Usato per impostare la form di login/logout a seconda del risultato
     * della funzione.
     */
    public function checkLoggedInAjax(){
        $USession=USingleton::getInstance('USession');

        if ( $USession->get('username') ){
            $username=ucfirst($USession->get('username'));
        }
        else {
            $username=false;
        }
        echo json_encode($username);
        exit;
    }
        
    /**
     * Controlla se l'utente attuale è il medico (o admin)
     * 
     * @return int 1 se l'utente è medico, 0 altrimenti
     */
    public function isMedic() {
        $USession=  USingleton::getInstance("USession");
        $FUtente=  USingleton::getInstance("FUtente");

        $username=$USession->get("username");
        return $FUtente->isMedic($username);
    }
    
    /**
     * Restituisce l'username dell'utente attuale, contenuto nella sessione 
     * 
     * @return string
     */
    public function getMyUsername() {
            $USession=  USingleton::getInstance("USession");
            return $USession->get("username");            
    }
        
        
}
