<?php

class VPatientsDB extends View {

   

    /**
     * Carica la home page della gestione del database, mostrando tutti i pazienti
     * che attualmente vi sono salvati. 
     * 
     * @param type $arrayPat
     * @return string
     */
    public function fetchHomePatients($arrayPat){
        $this->assign('people',$arrayPat);
        return $body=$this->fetch('body_DB.tpl');
    }
    
    /**
     * Carica i dati della specifica visita di un paziente dentro al relativo template
     * 
     * @param type $arrayInfo
     * @return string
     */
    public function getPatientDetail($arrayInfo){
        $this->assign('info',$arrayInfo);
        
        $body=$this->fetch('body_patientDetail.tpl');
        return $body;
    }
    
    /**
     * Carica la form di inserimento di un nuovo paziente
     * 
     * @return string
     */
    public function showInsertForm(){
        $body=$this->fetch('body_insertPatient.tpl');
        return $body;       
    }
    
    /**
     * Carica la pagina in cui sono mostrati i risultati (almeno 1) della ricerca
     * di uno o più pazienti
     * 
     * @param string $message
     * @param mixed $patients
     * @param type $numResults
     * @return string
     */
    public function getSearchResult($message,$patients,$numResults){
        $this->assign('numResults',$numResults);
        $this->assign('message',$message);
        $this->assign('rows',$patients);
        $body=$this->fetch('body_resultSearch.tpl');
        return $body;
    }
    
    /**
     * Carica la form di ricerca dei pazienti
     * 
     * @return string
     */
    public function fetchSerachForm(){
        $body=$this->fetch('body_searchPatient.tpl');
        return $body;
    }
    
    /**
     * Carica la pagina per scegliere quali campi del report stampare
     * 
     * @param string $cf
     * @param string $ch
     * @return string
     */
    public function getReportFields($cf,$ch){
        $this->assign('patLink',$cf);
        $this->assign('checkLink',$ch);
        $body=$this->fetch('body_reportFields.tpl');
        return $body;
    }
    
    /**
     * Carica la pagina di modifica di un paziente
     * 
     * @param string $cf
     * @return string
     */
    public function getPatientModPage($cf){
        $this->assign('link',md5($cf));
        $body=$this->fetch('body_modPatient.tpl');
        return $body;
    }
    
    /**
     * Carica la pagina di modifica di una visita di un paziente
     * 
     * @param array $arrayInfo
     * @param string $dateCH
     * @return string
     */
    public function getCheckModPage($arrayInfo,$dateCH){
        $this->assign('name',$arrayInfo['name']);
        $this->assign('surname',$arrayInfo['surname']);
        $this->assign('CF',$arrayInfo['CF']);
        $this->assign('check',$dateCH);
        $body=$this->fetch('body_modCheck.tpl');
        return $body;
    }
    
    /**
     * Carica la pagina di conferma dell'eliminazione di un paziente
     * 
     * @param string $cf
     * @return string
     */
    public function showPatientConfirmPage($cf){
        $this->assign('cf',md5($cf));
        $body=$this->fetch('body_confirmDelPatient.tpl');
        return $body;
    }
    
    /**
     * Carica la pagina di conferma dell'eliminazione di una visita
     * 
     * @param string $cf
     * @param string $dateCH
     * @return string
     */
    public function showCheckConfirmPage($cf,$dateCH){
        $this->assign('cf',md5($cf));
        $this->assign('ch',md5($dateCH));
        $body=$this->fetch('body_confirmDelCheck.tpl');
        return $body;
    }
    
    /**
     * Carica la pagina che mostra tutte le visite di un paziente
     * 
     * @param string $na nome del paziente
     * @param string $sur cognome del paziente
     * @param string $array srray con le date delle visite
     * @param string $link md5 del cf del paziente
     * @return string
     */
    public function getPatientChecks($na,$sur,$array,$link){
        $this->assign('pat',$link);
        $this->assign('PatChecks',$array);
        $this->assign('name',$na);
        $this->assign('surname',$sur);
        $body=$this->fetch('body_patientChecks.tpl');
        return $body;
    }
    
    /**
     * Carica la form per l'inserimento di una visita alla lista delle visite di
     * un paziente
     * 
     * @param string $cf cf del paziente
     * @param string $n nome del paziente
     * @param string $s cognome del paziente
     * @return string
     */
    public function showCheckForm($cf,$n,$s){
        $this->assign('CF',$cf);
        $this->assign('name',$n);
        $this->assign('surname',$s);
        $body=$this->fetch('body_newVisit.tpl');
        return $body;
    }
    
    /**
     * Carica il file javascript relativo a una specifica pagina solo quando questa
     * viene visitata. In questo modo viene caricato solo quando serve e non sempre
     * 
     * @param string $task identifica la pagina
     * @return type string
     */
    public function getHeader($task){
        switch ($task) {
            
            case 'delCheck':
                $header=$this->fetch('./headers/header_deleteCheck.tpl');
                return $header;
            
            case 'newVisit':
                $header=$this->fetch('./headers/header_insertCheck.tpl');
                return $header;
            
            case 'insert':
                $header=$this->fetch('./headers/header_insertPatient.tpl');
                return $header;
            
            case 'modCheck':
                $header=$this->fetch('./headers/header_modCheck.tpl');
                return $header;
            
            case 'modPat':
                $header=$this->fetch('./headers/header_modPatient.tpl');
                return $header;
            
            case 'printReport':
                $header=$this->fetch('./headers/header_printReport.tpl');
                return $header;
        }
    }

}