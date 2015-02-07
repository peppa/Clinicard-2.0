<?php

/**
 * La classe installation effettua la configurazione dei parametri di accesso
 * al database se è la priva volta che si utilizza questa applicazione.
 */
class UInstallation {
    
    /**
     * Mostra la form di inserimento dei parametri di configurazione
     */
    public function showForm(){
        $View=  USingleton::getInstance('View');
        $View->loadInstallPage();
    }
    
    /**
     * Salva i parametri di configurazione immessi dall'utente nel file confin.inc.php,
     * dopodichè crea le tabelle nel database e le popola con i dati necessari al funzionamento
     */
    public function installNew(){
        $View=  USingleton::getInstance('View');
        
        $user=$View->get('userConfig');
        $pass=$View->get('passConfig');
        $host=$View->get('hostConfig');
        $DB=$View->get('DBConfig');
        
        $stringFile=file_get_contents("./Configuration files/config.inc.php");
        
        $newFile = str_replace("user_example", $user, $stringFile);
        $newFile = str_replace("password_example", $pass, $newFile);
        $newFile = str_replace("host_example", $host, $newFile);
        $newFile = str_replace("database_example", $DB, $newFile);
        
        $file=fopen('.\Configuration files\config.inc.php', 'w');
        fwrite($file, $newFile);
        fclose($file);
        
        $FDatabase=new \mysqli($host,$user,$pass,$DB);
        $queries=  file_get_contents("./Configuration files/Database_script.sql");
        $FDatabase->multi_query($queries);
        
        $View->showConfigSuccess();        
    }
    
    /**
     * Controlla se l'installazione sia già stata effettuata
     * 
     * @global type $config file di configurazione che contiene i parametri
     * @return boolean true in caso positivo, false se l'applicazione va ancora configurata
     */
    public function alreadyInstalled(){
        global $config;
        if ($config['mysql']['user']!="user_example"){
            $result=true;
        }
        else {
            $result=false;
        }
        return $result;
    }   
    
    
    
    
}

