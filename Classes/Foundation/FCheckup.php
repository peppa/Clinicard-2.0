<?php


class FCheckup extends FDatabase {
    
    
    /**
    * Crea un'istanza di EVisit per ogni visita, contenuta nel database, che corrisponde
    * al codice fiscale del paziente passato alla funzione
    * 
    * @param string $cf
    */
    public function fillCheckupsArray($cf){
        $cfPat=$cf; //togliere
                    $query="SELECT * FROM `visite` WHERE `Codice Fiscale`='".$cfPat."'";
                    $result=$this->query($query);
                    while ( $row=$result->fetch_assoc() ){
                        $v=new EVisit($row['Codice Fiscale'], $row['DataVisita'], $row['Anamnesi'], $row['Esame Obiettivo'], $row['Conclusione'], $row['Prescrizione Esami'], $row['Terapia'], $row['Controllo']);
                    }
    }
    
    /**
     * Inserisce una nuova visita nel database con i valori contenuti nell'array
     * associativo che viene passato alla funzione
     * 
     * @param array $array
     */
    public function insertNewCheckup($array){
        $query1="INSERT INTO `clinica`.`visite`(`Codice Fiscale`, `DataVisita`, `Anamnesi`, `Esame Obiettivo`, `Conclusione`, `Prescrizione Esami`, `Terapia`, `Controllo`)";
        $query2="VALUES ('".$array['CF']."','".$array['dateCheck']."','".$array['medHistory']."','".$array['medExam']."','".$array['conclusions']."','".$array['toDoExams']."','".$array['terapy']."','".$array['checkup']."')";
        $query=$query1." ".$query2;
        $this->query($query);
    }
    
    /**
     * Cancella una visita dal database, identificata dal codice fiscale del paziente
     * e dalla data. Se la data corrisponde alla stringa "all" cancella tutte le visite
     * di quel paziente.
     * 
     * @param string $cf
     * @param string $dateCheck
     */
    public function deleteCheckup($cf,$dateCheck){
        if ( $dateCheck=="all" ){
            $query="DELETE FROM `visite` WHERE `Codice Fiscale`='".$cf."'";
        }
        else {
            $query="DELETE FROM `visite` WHERE `Codice Fiscale`='".$cf."' AND `DataVisita`='".$dateCheck."'";
        }
        $this->query($query);
    }
    
    /**
     * Quando il medico modifica il codice fiscale del paziente, viene automaticamente
     * modificato anche quello di tutte le sue visite
     * 
     * @param string $cfNew nuovo codice fiscale
     * @param string $cfOld vecchio codice fiscale
     */
    public function updateCheckCF($cfNew,$cfOld){
        $query="UPDATE `visite` SET `Codice Fiscale`='".$cfNew."' WHERE `Codice Fiscale`='".$cfOld."'";
        $this->query($query);
    }
    
    /**
     * Modifica i dati di una visita
     * 
     * @param array $array contiene i nuovi dati scelti dal medico
     * @param string $cfPatient identificatore della visita
     * @param string $dateCheckOld identificatore della visita
     */
    public function updateCheck($array,$cfPatient,$dateCheckOld){
        $query="UPDATE `visite` SET `Codice Fiscale`='".$cfPatient."',`DataVisita`='".$array['dateCheck']."',`Anamnesi`='".$array['medHistory']."',`Esame Obiettivo`='".$array['medExam']."',`Conclusione`='".$array['conclusions']."',`Prescrizione Esami`='".$array['toDoExams']."',`Terapia`='".$array['terapy']."',`Controllo`='".$array['checkup']."' WHERE `Codice Fiscale`='".$cfPatient."' AND `DataVisita`='".$dateCheckOld."'";
        $this->query($query);
    }
    
    
    
    
    
    
}
