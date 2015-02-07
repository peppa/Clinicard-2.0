<?php



class EVisit {
    
    /**
     * Codice fiscale del paziente
     * 
     * @var string
     */
    public $cf;
    
    /**
     * Data della visita
     * 
     * @var string
     */
    public $dateCheck;
    
    /**
     * Campo anamnesi
     * 
     * @var string
     */
    public $medHistory;
    
    /**
     * Campo esame obiettivo
     * 
     * @var string
     */
    public $medExam;
    
    /**
     * Campo conclusioni
     * 
     * @var string
     */
    public $conclusions;
    
    /**
     * Campo esami prescritti
     * 
     * @var string
     */
    public $toDoExam;
    
    /**
     * Campo terapia
     * 
     * @var string
     */
    public $terapy;
    
    /**
     * Campo controllo
     * 
     * @var string
     */
    public $checkup;
    
    /**
     * Codice fiscale del paziente criptato in md5
     * 
     * @var string
     */
    public $encCF;
    
    /**
     * Data della visita criptata in md5
     * 
     * @var string
     */
    public $encCH;
    
    /**
     * Array che contiene tutte le istanze di EVisit che sono state create
     * 
     * @var array
     */
    public static $istances=array();
    
    /**
     * crea una nuova istanza di Evisit la quale viene aggiunta all'array $istances
     * 
     * @param string $cf
     * @param string $dateC
     * @param string $medH
     * @param string $medE
     * @param string $conc
     * @param string $toDoE
     * @param string $ter
     * @param string $check
     */
    public function __construct($cf,$dateC,$medH,$medE,$conc,$toDoE,$ter,$check) {
        $this->cf=$cf;
        $this->dateCheck=$dateC;
        $this->medHistory=$medH;
        $this->medExam=$medE;
        $this->conclusions=$conc;
        $this->toDoExam=$toDoE;
        $this->terapy=$ter;
        $this->checkup=$check;
        $this->encCF=md5($cf);
        $this->encCH=md5($dateC);
        self::$istances[]=$this;
    }
    
    /**
     * Restituisce il codice fiscale del paziente
     * 
     * @return string
     */
    public function getCF(){
        return $this->cf;
    }
    
    /**
     * Restituisce la data della visita
     * 
     * @return string
     */
    public function getDateCheck(){
        return $this->dateCheck;
    }
    
    /**
     * Restituisce il contenuto del campo Anamnesi
     * 
     * @return string
     */
    public function getMedHistory(){
        return $this->medHistory;
    }
    
    /**
     * Restituisce il contenuto del campo Esame Obiettivo
     * 
     * @return string
     */
    public function getMedExam(){
        return $this->medExam;
    }
    
    /**
     * Restituisce il contenuto del campo Conclusioni
     * 
     * @return string
     */
    public function getConclusions(){
        return $this->conclusions;
    }
    
    /**
     * Restituisce il contenuto del campo Esami Prescritti
     * 
     * @return string
     */
    public function getToDoExam(){
        return $this->toDoExam;
    }
    
    /**
     * Restituisce il contenuto del campo Terapia
     * 
     * @return string
     */
    public function getTerapy(){
        return $this->terapy;
    }
    
    /**
     * Restituisce il contenuto del campo Controllo
     * 
     * @return string
     */
    public function getCheckup(){
        return $this->checkup;
    }
    
    /**
     * Restituisce il codice fiscale criptato in md5
     * 
     * @return string
     */
    public function getEncCf(){
        return $this->encCF;
    }
    
    /**
     * Restituisce la data della visita criptata in md5
     * 
     * @return string
     */
    public function getEncCh(){
        return $this->encCH;
    }
}

