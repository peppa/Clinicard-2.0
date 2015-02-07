<?php 


class FDatabase extends mysqli{

    /**
     * Apre una nuova connessione al database
     * 
     * @global type $config variabile che contiene i parametri per la connessione
     */
    public function __construct(){
            global $config;
            parent::__construct($config['mysql']['host'],$config['mysql']['user'],$config['mysql']['password'],$config['mysql']['database']);

            /* check DB connection */
            if ($this->connect_errno) {
                debug("Error reaching DB: ".$this->connect_error);
            }else{
                debug("DB Connection estabilished successfully");
            }

    }

    /**
     * Esegue una query sul database e ne fa il debug (se attivo)
     * 
     * @param string $passedQuery query da eseguire
     * @param type $resultmode
     * @return mixed risultato della query
     */
    public function query($passedQuery,$resultmode=NULL){
            $result=parent::query($passedQuery, $resultmode);
            debug($passedQuery);
            debug($this->error);
            debug('Numero risultati: '.$this->affected_rows);
            return $result;
    }

    /**
     * Esegue una query sul database e restituisce un array associativo con il risultato
     * 
     * @param string $q query da eseguire
     * @return mixed successo: array associativo che contiene il risultato della query, fallimento: false
     */
    public function associativeArrayQuery($q)
    {
            $result = $this->query($q); 

            if ($result!=false) // on query success 
            {
                    if($result->num_rows != 0) // if there's at least one row result.
                    {
                            while ($row = $result->fetch_assoc())  
                            {
                                    $returnArray[] = $row; 
                            }
                    }
                    else // if the query returned an empty result
                            $returnArray = array(); // creates an empty array and returns it.
            }
            else // on query failure
            {
                    $returnArray = false; 
            }

            return $returnArray;
    }



}