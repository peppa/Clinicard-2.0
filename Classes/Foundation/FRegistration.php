<?php

/*
 * File creato da Carlo Centofanti
 */

/**
 * Description of FRegistration
 *
 * @access public
 * @package FRegistration
 * @author Carlo
 */
class FRegistration extends FDatabase {
    
    /**
     * Registra un nuovo utente e salva i suoi dati nel database. Per tutti gli utenti il flag
     * medico è impostato a zero.
     * 
     * 
     * @param string $field1 nome dell'utente
     * @param string $field2 cognome dell'utente
     * @param string $field3 cf dell'utente
     * @param string $field4 email dell'utente 
     * @param string $field5 username dell'utente
     * @param string $field6 password dell'utente
     */
    public function insertUser($field1,$field2,$field3,$field4,$field5,$field6){
        $query1="INSERT INTO `utenti` (`Nome`, `Cognome`, `Codice Fiscale`, `Email`, `Username`, `Password`, `Medico`)";
        $query2="VALUES ('".$field1."','".$field2."','".$field3."','".$field4."','".$field5."','".$field6."','0')";
        $query=$query1." ".$query2;
        $this->query($query);
    }
    
    /**
     * Controlla che l'username scelto da un utente sia disponibile
     * 
     * @param strng $username username scelto dall'utente
     * @return boolean false se è disponiblile, true altrimenti
     */
    public function checkUsername($username){
        $query='SELECT `Username` FROM `utenti` WHERE `Username`="'.$username.'"';
        $result=$this->query($query);
        
        if ($result->fetch_assoc()!=NULL){
            return true;
        }
        else{
            return false;
        }
    }
    
    /**
     * Controlla che l'email scelta da un utente sia disponibile
     * 
     * @param string $email email scelta dall'utente
     * @return boolean false se è disponibile, true altrimenti
     */
    public function checkEmail($email){
        $query='SELECT `Email` FROM `utenti` WHERE `Email`="'.$email.'"';
        $result=$this->query($query);
        
        if ($result->fetch_assoc()!=NULL){
            return true;
        }
        else{
            return false;
        }
    }
    
    /**
     * Controlla che il codice fiscale da un utente non sia uguale a quello di un altro
     * utente già registrato
     * 
     * @param string $cf cf inserito dall'utente
     * @return boolean true se corrisponde a un altro utente, false altrimenti
     */
    public function checkCF($cf){
        $query='SELECT * FROM `utenti` WHERE `Codice Fiscale`="'.$cf.'"';
        $result=$this->query($query);
        
        if ($result->fetch_assoc()!=NULL){
            return true;
        }
        else{
            return false;
        }
    }
    
    
    
}