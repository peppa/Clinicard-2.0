<?php

class VRegistration extends View {
    
    /**
     * Avverte un utente già autenticato che per effettuare la registrazione deve
     * prima effettuare il logout
     * 
     * @return string
     */
    public function theUserIsLoggedYet() {
        return "Sei già loggato, effettua logout prima di registrare un nuovo utente";
        
    }
    
    /**
     * Prende tutti i dati inseriti dall'utente nella form di registrazione
     * e li restituisce in un array associativo
     * 
     * @return array Inserted data
     */
    public function getFormValues(){
        return array(
            "name"=>$this->get('name'),
            "surname"=>$this->get('surname'),
            "cf"=>$this->get('CF'),
            "email"=>$this->get('email'),
            "username"=>$this->get('username'),
            "password1"=>$this->get('password1'),
            "password2"=>$this->get('password2'),
        );
    }
    
    /**
     * Messaggio mostrato quando la registrazione di un nuovo utente
     * è stata effettuata con successo
     * 
     * @return string
     */
    function regSuccess() {
        return "Registrazione avvenuta con successo"; //non va bene
    }
    
    /**
     * Carica la form per la registrazione
     * 
     * @return string
     */
    public function loadRegistrationForm(){
        $body=$this->fetch('body_registration.tpl');
        return $body;
    }
    
    /**
     * Carica l'header con il riferimento al file javascript relativo alla registrazione.
     * In questo modo lo script viene caricato solo quando serve
     * 
     * @return string
     */
    public function getHeader(){
        $header=$this->fetch('./headers/header_registration.tpl');
        return $header;
    }
}

