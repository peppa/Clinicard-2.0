<?php

/**
 * Questa classe gestisce la sessione e salva i cookie
 */
class USession {

    /**
     * Inizia una nuova sessione e imposta il cookie
     */
    public function __construct() {
            session_start();
            $this->createCookie();
    }

    /**
     * Aggiunge l'utente che ha appena effettuato il login alla sessione corrente
     * 
     * @param string $user username dell'tente
     * @param string $pass password dell'utente
     */
    public function login($user,$pass){
            $this->set('username',$user);
            $this->set('password',$pass);
    }

    /**
     * Cancella dalla sessione i dati relativi all'utente, aggiorna anche il cookie
     */
    public function logout(){
            unset($_SESSION["username"]);
            unset($_SESSION["password"]);
            unset($_SESSION["keepLogged"]);

            $this->createCookie();
    }

    /**
     * Controlla che un utente appartenga alla alla sessione
     * 
     * @return boolean
     */
    public function checkLogged(){

            if (isset($_SESSION['username']) and isset($_SESSION['password'])){
                    $logged=true;
            }
            else {
                $logged=false;                
            }
            return $logged;

    }

    /**
     * Assegna determinati valori alla sessione, utilizzato per impostare username,
     * password, e funzione rememberMe
     * 
     * @param string $key campo
     * @param string $value valore
     */
    public function set($key, $value){
            $_SESSION[$key]=$value;
    }

    /**
     * Ottiene il valore dei campi dell'array $_SESSION
     * 
     * @param string $key campo
     * @return mixed string se il campo è stato impostato, false altrimenti
     */
    public function get($key)
    {
            if(isset($_SESSION[$key]))
                return $_SESSION[$key];
            else
                return false;
    }

    /**
     * Imposta il valore del campo rememberME, usato per impostare il cookie
     * 
     * @param boolean $value 
     */
    public function keepAccess($value){
            $_SESSION['keepLogged']=$value;
            $this->createCookie();
    }

    /**
     * Imposta il cookie per l'utente. Se quest'ultimo ha spuntato il campo "ricordami" la 
     * durata del cookie è di 2 mesi, altrimenti scade con la sessione
     * 
     * @global type $config contiene la durata del cookie
     */
    public function createCookie(){
            if($this->get('keepLogged')){
                global $config;
                setcookie(session_name(), session_id(), time()+$config['cookie']['holdtime'], "/");
            }
            else{
                    setcookie(session_name(), session_id(), 0, "/");
            }

    }

}