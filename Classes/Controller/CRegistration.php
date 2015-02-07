<?php

/**
 * Classe che si occupa della registrazione di nuovi utenti
 */
class CRegistration {
    /**
     * Body calcolato dai metodi della pagina che viene passato a CHome per
     * costruire la pagina
     * 
     * @var string 
     */
    private $bodyHTML;
    
    /**
     * Messaggio di errore stampato qualora la validazione della form non verifichi tutte
     * le condizioni, mostra tutti i campi che non rispettano i requisiti.
     * 
     * @var string
     */
    private $error;


    /**
     * Carica la form per la registrazione di un utente. Restituisce un errore se la funzione viene
     * lanciata da un utente che è già autenticato.
     * 
     * @return string body della pagina
     */
    public function newUser(){
            $VRegistration=USingleton::getInstance('VRegistration');
            $USession=USingleton::getInstance('USession');
            $this->bodyHTML=$VRegistration->loadRegistrationForm();
            
            if ( $USession->get('username') ) {
                $message= "Esegui il logout prima di registrare un nuovo utente";
                $this->bodyHTML=$VRegistration->getErrorMessage($message);             
            }
            else {
                $action=$VRegistration->get('action');
                if ($action=="addUser") {
                    $this->addNewUser();
               }else {
                    $this->loadRegForm();
                }
            }
            return $this->bodyHTML;
                
        }
        
    /**
     * Carica la form per la registrazione
     */
    public function loadRegForm(){
        $VRegistration=  USingleton::getInstance('VRegistration');
        $this->bodyHTML=$VRegistration->loadRegistrationForm();
    }

    /**
     * Prende tutti i calori dei campi dati in input dall'utente e ne fa la
     * validazione
     */
    public function addNewUser(){
        $VRegistration=  USingleton::getInstance('VRegistration');
        $FRegistration=  USingleton::getInstance('FRegistration');

        $data=$VRegistration->getFormValues();
        foreach ($data as $key => $value) {
            
            switch ($key) {
                case "name":
                    $name=ucfirst($value);
                    break;
                
                case "surname":
                    $surname=ucfirst($value);
                    break;
                
                case "cf":
                    $cf=$value;                    
                    break;
                
                case "email":
                    $mail=$value;                    
                    break;
                
                case"username":                    
                    $user=$value;                    
                    break;
                
                case "password1":
                    $pass1=$value;                    
                    break;
                
                case 'password2':
                    $pass2=$value;
                    break;
            }
        }
        $valid=$this->validateRegForm($name, $surname, $cf, $mail, $user, $pass1,$pass2);
        if ($valid==false){
            $message="Registrazione non effettuata, i seguenti dati non sono corretti :"."<br>".$this->error;
            $this->bodyHTML=$VRegistration->getErrorMessage($message,true);
        }
        else{
            //saving data..
            $FRegistration->insertUser($name,$surname,$cf,$mail,$user,$pass1);
            $message="registrazione avvenuta con successo";
            $this->bodyHTML=$VRegistration->getInfoMessage($message);
            
        }

    }
    
    /**
     * Controlla i dati inseriti dall'utente
     * 
     * @param string $name
     * @param string $surname 
     * @param string $cf
     * @param string $mail
     * @param string $user
     * @param string $pass1
     * @param string $pass2
     * @return boolean true se tutti i campi sono validati, false se almeno uno non rispetta
     * i requisiti
     */
    public function validateRegForm($name, $surname, $cf, $mail, $user, $pass1,$pass2){
        $FUtente=  USingleton::getInstance('FUtente');
        
        $valid=true;
        if (preg_match('/[^A-Za-z\s\']/', $name)){
            $valid=false;
            $this->dataError("nome");
        }
        
        if (preg_match('/[^A-Za-z\s\']/', $surname)){
            $valid=false;
            $this->dataError("cognome");
        }
        
        if (strlen($cf)!=16 || preg_match('/[^A-Z\d]/', $cf)|| !$FUtente->codiceFiscaleIsAvailable($cf)){
            $valid=false;
            $this->dataError("codice fiscale");
        }
        
        if (!$FUtente->emailIsAvailable($mail)){
            $valid=false;
            $this->dataError("email");
        }
        
        if (!$FUtente->usernameIsAvailable($user)){
            $valid=false;
            $this->dataError("username");
        }
        
        if ($pass1!=$pass2 || strlen($pass1)<5){
            $valid=false;
            $this->dataError("password");
        }
        return $valid;
    }
    
    /**
     * Messaggio di errore costruito progressivamente dalla funzione di validazione della form, che
     * passa tutti i valori che non sono validi e li stampa
     * 
     * @param string $field
     */
    public function dataError($field) {
        $this->error=($this->error.$field."<br>");
        
    }
    
    /**
     * Controlla se l'username scelto sia disponibile o meno
     */
    public function checkUsername(){
        $VRegistration=  USingleton::getInstance('VRegistration');
        $FRegistration=  USingleton::getInstance('FRegistration');
        
        $user=$VRegistration->get('user');
        $result=$FRegistration->checkUsername($user);
        echo json_encode($result);
        exit;
    }
        
    /**
     * controlla se l'email scelta sia dsiponibile o meno
     */
    public function checkEmail(){
        $VRegistration=  USingleton::getInstance('VRegistration');
        $FRegistration=  USingleton::getInstance('FRegistration');
        
        $mail=$VRegistration->get('mail');
        $result=$FRegistration->checkEmail($mail);
        echo json_encode($result);
        exit;
    }
    
    /**
     * controlla che il codice fiscale inserito dall'utente non corrisponda già a un
     * altro utente
     */
    public function checkCFUser(){
        $VRegistration=  USingleton::getInstance('VRegistration');
        $FUtente=  USingleton::getInstance('FUtente');
        
        $cf=$VRegistration->get('cf');
        $result=$FUtente->codiceFiscaleIsAvailable($cf);
        echo json_encode($result);
        exit;
    }
    
    /**
     * Imposta l'header specifico per questo controllore, contenente il codice 
     * javascript per le operazioni lato client come la validazione della form 
     *
     * @return string 
     */
    public function getHeader(){
        $VRegistration=  USingleton::getInstance('VRegistration');
        $header=$VRegistration->getHeader();
        return $header;
    }
   
        
}
