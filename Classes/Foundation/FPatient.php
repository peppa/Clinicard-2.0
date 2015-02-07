<?php


class FPatient extends FDatabase {
    
    /**
     * Crea un'istanza di EPatient per ogni righa contenuta nella tabella pazienti, quindi 
     * per ogni paziente salvato nel database
     */
    public function fillPatientsArray(){
        $query="SELECT * FROM `pazienti`";
        $result=$this->query($query);
        while ( $row=$result->fetch_assoc() ){
            $pat=new EPatient($row['Nome'],$row['Cognome'],$row['Codice Fiscale'],$row['DataNascita'],$row['Sesso']);
        }
    }
    
    /**
     * Ricerca un paziente all'interno del database, la ricerca può avvenire per nome, cognome
     * o codice fiscale. Restituisce un array di dimensione pari al numero di risultati della query.
     * Ogni elemento di tale array è a sua volta un array associativo che contiene tutte le 
     * informazioni relative al paziente. Restituisce 0 se la ricerca non produce risultati
     * 
     * @param string $key nome, cognome o cf del paziente
     * @return mixed success: array, failure: int 0
     */
    public function findPatient($key){
            $query="SELECT * FROM `pazienti` WHERE `Nome`='".$key."' or `Cognome`='".$key."' or `Codice Fiscale`='".$key."'";
            $result=$this->query($query);
            
            $numRows=0;
            while ( $row=$result->fetch_assoc() ){
                $results[$numRows]=array('name'=>$row['Nome'],'surname'=>$row['Cognome'],'cf'=>$row['Codice Fiscale'],'dateBirth'=>$row['DataNascita'],'gender'=>$row['Sesso'],'link'=>md5($row['Codice Fiscale']));
                $numRows++;                
            }
            if ( isset($results) ){ //non restituisce errori se la ricerca non da risultati
                return $results;                
            }
    }
    
    /**
     * Inserisce un nuovo paziente nel database con i dati contenuti dell'array associativo
     * passato alla funzione
     * 
     * @param $array array associativo
     */
    public function insertNewPatient($array){
        $query1="INSERT INTO `clinica`.`pazienti`(`Nome`, `Cognome`, `Sesso`, `DataNascita`, `Codice Fiscale`)";
        $query2="VALUES ('".$array['name']."','".$array['surname']."','".$array['gender']."','".$array['dateBirth']."','".$array['CF']."')";
        $query=$query1." ".$query2;
        $this->query($query);
    }
    
    /**
     * Cancella dal database un paziente identificato dal proprio codice fiscale
     * 
     * @param string $cf codice fiscale del paziente
     */
    public function deletePatient($cf) {
        $query="DELETE FROM `pazienti` WHERE `Codice Fiscale`='".$cf."'";
        $this->query($query);
    }
    
    /**
     * Modifica i dati di un paziente sul database con quelli contenuti nell'array passato
     * alla funzione
     * 
     * @param array $array Contiene i nuovi dati del paziente
     * @param string $cf identificatore del paziente
     */
    public function updatePatient($array,$cf){
        $query="UPDATE `pazienti` SET `Nome`='".$array['name']."',`Cognome`='".$array['surname']."',`Sesso`='".$array['gender']."',`DataNascita`='".$array['dateBirth']."',`Codice Fiscale`='".$array['CF']."' WHERE `Codice Fiscale`='".$cf."'";
        $this->query($query);
    }
    
    /**
     * Controlla che il cf che il medico sta immettendo in fasi di inserimento di un
     * nuovo paziente non esista già nel database
     * 
     * @param string $cf codice fiscale da controllare
     * @return boolean true se è disponibile, false altrimenti
     */
    public function checkCFPat($cf) {
        $query="SELECT * FROM `pazienti` WHERE `Codice Fiscale`='".$cf."'";
        $result=$this->query($query);
        if (!$this->affected_rows){return TRUE;}
        else {return FALSE;}        
    }
    
    
    
    
    
    
    
    
    
}

