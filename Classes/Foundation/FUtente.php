<?php

/*
 * File creato da Carlo Centofanti
 */

/**
 * Description of FUtente
 *
 * @access public
 * @package FUtente
 * @author Carlo
 */
class FUtente extends FDatabase {
    
    /**
     * Controlla che l'username scelto dall'utente sia disponibile
     * 
     * @param string $user username scelto dall'utente
     * @return boolean true se è disponibile, false altrimenti
     */
    public function usernameIsAvailable($user) {
        $query="SELECT * FROM `utenti` WHERE `Username`='".$user."'";
        $result=$this->query($query);
        if (!$this->affected_rows){return TRUE;}
        else {return FALSE;}  
    }
    
    /**
     * Controlla che il codice fiscale inserito dall'utente non corrisponda a quello
     * di un altro utente già registrato
     * 
     * @param string $cf cf inserito dall'utente
     * @return boolean true se non corrisponde, false altrimenti
     */
    public function codiceFiscaleIsAvailable($cf) {
        $query="SELECT * FROM `utenti` WHERE `Codice Fiscale`='".$cf."'";
        $result=$this->query($query);
        if (!$this->affected_rows){return TRUE;}
        else {return FALSE;}        
    }
    
    /**
     * Controlla che il'email inserita dall'utente non corrisponda a quella
     * di un altro utente già registrato
     * 
     * @param string $email email inserita dall'utente
     * @return boolean true se non corrisponde, false altrimenti
     */
    public function emailIsAvailable($email){
        $query="SELECT * FROM `utenti` WHERE `Email`='".$email."'";
        $result=$this->query($query);
        if (!$this->affected_rows){return TRUE;}
        else {return FALSE;} 
    }
    
    /**
     * Controlla se l'utente è medico (o admin)
     * 
     * @param string $username username del medico
     * @return int 1 se l'utente è un medico, 0 altrimenti
     */
    public function isMedic($username) {
        $query="SELECT `Medico` FROM `utenti` WHERE `Username`='$username'";
        $res=$this->query($query);
        $res=$res->fetch_assoc();
        
        return $res['Medico'];       
    }
    
    /**
     * Restituisce tutti i dati di un utente che corrisponde al codice 
     * fiscale che viene passato alla funzione
     * 
     * @param string $cf cf dell'utente
     */
    public function getAllUtenteDataFromCF($cf){
        $query="SELECT * FROM `utenti` WHERE `Codice Fiscale`='$cf'";
        $res=$this->QueryassociativeArray($query);
    }
    
    /**
     * Restituisce tutti i dati di un utente che corrisponde all'username
     *  che viene passato alla funzione
     * 
     * @param string $uname username dell'utente
     * @return array associativo
     */
    public function getAllUtenteDataFromUsername($uname){
        $query="SELECT * FROM `utenti` WHERE `Username`='$uname'";
        $res=$this->query($query);
        
        return ($res->fetch_assoc());
        
    }
    
    }
    
?>
