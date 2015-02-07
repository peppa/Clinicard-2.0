<?php

/**
 * Classe principale che gestisce l'output su schermo e inizializza smarty
 */
Class View extends Smarty {

    /**
     * Inizializza e configura smarty
     * 
     * @global type $config contiene i parametri di configurazione di smarty
     */
    public function __construct() {
    parent::__construct();
    //$this->Smarty();
    global $config;
    $this->template_dir = $config['smarty']['template_dir'];
    $this->compile_dir = $config['smarty']['compile_dir'];
    $this->config_dir = $config['smarty']['config_dir'];
    $this->cache_dir = $config['smarty']['cache_dir'];
    $this->caching = $config['smarty']['caching'];       
    }

    /**
     * Accede all'array $_REQUEST e restituisce il valore che corrisponde
     * alla stringa passata alla funzione
     * 
     * @param string $key
     * @return success: valore corrispondente a key, failure: false
     */
    public function get($key) {
        if (isset($_REQUEST[$key])) {
            return $_REQUEST[$key];
        }
        else {
            return false;
        }
    }

    /**
     * stampa una pagina diversa a seconda che l'utente sia medico o meno
     * 
     * @param boolean $doctor true se l'utente è il medico, false altrimenti
     */
    public function showPage($doctor){
        if ($doctor==true){
            $this->assign('isDoctor',true);            
        }
    	$this->display('mainPage.tpl');     
    }
    
    /**
     * Mostra un messaggio informativo all'utente. Se quando viene richiamata si specifica
     * il campo addButton come true, mostra anche un bottone che porta alla pagina principale
     * della gestionde del database
     * 
     * @param string $message messaggio da mostrare
     * @param boolean $addButton specifica se mostrare il bottone o meno (default: no)
     * @return string HTML del messaggio
     */
    public function getInfoMessage($message,$addButton=false){
        $this->assign('message',$message);
        $this->assign('addButton',$addButton);
        $body=$this->fetch('infoMessage.tpl');
        return $body;
    }
    
    /**
     * Mostra un messaggio di errore all'utente. Se quando viene richiamata si specifica
     * il campo addButton come true, mostra anche un bottone che riporta alla pagina precedente
     * 
     * @param string $message messaggio da mostrare
     * @param boolean $addButton specifica se mostrare il bottone o meno (default: no)
     * @return string HTML del messaggio
     */
    public function getErrorMessage($message,$addButton=false){
        $this->assign('message',$message);
        $this->assign('addButton',$addButton);
        $body=$this->fetch('errorMessage.tpl');
        return $body;
    }
    
    /**
     * Imposta il body della pagina passandolo a smarty
     * 
     * @param string $body codice HTML da passare a smarty
     */
    public function setBody($body){
        $this->assign('body',$body);
    }
    
    /**
     * Imposta l'header per la pagina, che cambia a seconda della pagina che l'utente
     * sta visitando, e lo passa a smarty
     * 
     * @param string $header codice HTML da passare a smarty
     */
    public function setHeader($header){
        $this->assign('header',$header);
    }
    
    /**
     * Crea un array che contiene header, body e footer come parametri. Per default
     * non sono impostati.
     * 
     * @param string $body
     * @param string $header
     * @param string $footer
     * @return array per essere stampato
     */
    public function makeContentArray($body=null,$header=null,$footer=null) {
        $return=null;
        if($body){
            if($header){                
                $return["header"]=$header;
            }
            if($footer){
                $return["footer"]=$footer;
            }
            $return["body"]=$body;
        }
        return $return;
        
    }
    
    /**
     * Mostra la pagina di installazione qualora sia il primo accesso effettuato sul sito
     */
    public function loadInstallPage(){
        $this->display('ConfigurationPage.tpl');
    }
    
    /**
     * Mostra la pagina di avvenuta configurazione
     */
    public function showConfigSuccess(){
        $this->display('ConfigurationSuccess.tpl');
    }
    
}
