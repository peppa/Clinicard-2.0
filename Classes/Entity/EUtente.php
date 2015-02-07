<?php

/*
 * File creato da Carlo Centofanti
 */

/**
 * Description of EUtente
 *
 * @access public
 * @package EUtente
 * @author Carlo
 */
class EUtente {
    
    /**
     * Nome dell'utente
     * 
     * @var string
     */
    private $nome;
    
    /**
     * Cognome dell'utente
     * 
     * @var string
     */
    private $cognome;
    
    /**
     * Codice fiscale dell'utente
     * 
     * @var string
     */
    private $cf;
    
    /**
     * email dell'utente
     * 
     * @var string
     */
    private $email;
    
    /**
     * username scelto dall'utente
     * 
     * @var string
     */
    private $username;
    
    /**
     * password scelta dall'utente
     * 
     * @var string
     */
    private $password;
    
    /**
     * Vale 1 se l'utente è medico (o amministratore), 0 altrimenti
     * 
     * @var int
     */
    private $isMedic;
    
    /**
     * Codice fiscale criptato
     * 
     * @var string
     */
    private $encCF;
    
    /**
     * Crea una nuova istanza di EUtente con il codice fiscale oppure passando tutti gli argomenti
     * 
     * @param string $cf Codice Fiscale
     * @param string $n (not necessary)
     * @param string $c (not necessary)
     * @param string $email (not necessary)
     * @param string $uname (not necessary)
     * @param string $encPassword (not necessary)
     * @param string $medic (not necessary)
     */
    public function __construct($cf,$n=false,$c=false,$email=false,$uname=false,$encPassword=false,$medic=false){
        $this->cf=$cf;
        $this->encCF=md5($cf);

        if($n&&$c&&$email&&$uname&&$pwd&&$medic){
            $this->nome=$n;
            $this->cognome=$c;
            $this->email=$email;
            $this->username=$uname;
            $this->password=$pwd;
            $this->isMedic=$medic;
        }else{
            $FUtente=  USingleton::getInstance("FUtente");
            $data=$FUtente->getAllUtenteData($cf);
            
            $this->nome=$data["Nome"];
            $this->cognome=$data["Cognome"];
            $this->email=$data["Email"];
            $this->username=$data["Username"];
            $this->password=  md5($data["Password"]);
            $this->isMedic=$data["Medico"];
            
        }
    }
    
    
    
    
    /**
     * Restituisce il nome dell'utente
     * 
     * @return string
     */
    public function getName(){
        return $this->nome;
    }
    
    /**
     * Restituisce il cognome dell'utente
     * 
     * @return string
     */
    public function getSurname(){
        return $this->cognome;
    }
    
    /**
     * Restituisce il codice fiscale dell'utente
     * 
     * @return string
     */
    public function getCF(){
        return $this->cf;
    }
    
    /**
     * Restituisce l'email dell'utente
     * 
     * @return string
     */
    public function getEmail(){
        return $this->email;
    }
    
    /**
     * Restituisce l'username dell'utente
     * 
     * @return string
     */
    public function getUsername(){
        return $this->username;
    }
    
    /**
     * Restituisce la password criptata dell'utente
     * 
     * @return string
     */
    public function getEncPassword(){
        return $this->password;
    }
    
    /**
     * 
     * @return int
     */
    public function isMedic(){
        return $this->isMedic;
    }
    
    /**
     * Imposta il nome dell'utente
     * 
     * @param string $new
     */
    public function setName($new){
        $this->nome=$new;
    }
    
    /**
     * Imposta il cognome dell'utente
     * 
     * @param string $new
     */
    public function setSurname($new){
        $this->cognome=$new;
    }
    
    /**
     * Imposta il nome dell'utente
     * 
     * @param string $new
     */
    public function setCF($new){
        $this->cf=$new;
    }
    
    /**
     * Imposta l'email dell'utente
     * 
     * @param string $new
     */
    public function setEmail($new){
        $this->email=$new;
    }
    
    /**
     * Imposta l'username dell'utente
     * 
     * @param string $new
     */
    public function setUsername($new){
        $this->username=$new;
    }
    
    /**
     * Imposta la password dell'utente
     * 
     * @param string $new
     */
    public function setEncPassword($new){
        $this->password=$new;
    }
    
    /**
     * 
     * @param string $new
     */
    public function setIsMedic($new){
        $this->isMedic=$new;
    }
    
    
    
    
}

?>