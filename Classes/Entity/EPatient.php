<?php


class EPatient {
    
    /**
     * Nome del paziente
     * @var string
     */
    public $name;
    
    /**
     * Cognome del paziente
     * @var string
     */
    public $surname;
    
    /**
     * Codice Fiscale del paziente
     * @var string
     */
    public $cf;
    
    /**
     * Data di nascita del paziente
     * @var string
     */
    public $dateB;
    
    /**
     * Sesso del paziente (M/F)
     * @var string
     */
    public $gender;
    
    /**
     * codice fiscale del paziente criptato in md5
     * @var string
     */
    public $encCF;
    
    /**
     * Array che contiene tutte le istanze di EPatient create
     * @var array
     */
    public static $istances=array();
    
    /**
     * Crea una nuova istanza di EPatient
     * 
     * @param string $n nome
     * @param string $c cognome
     * @param string $cf codice fiscale
     * @param string $d data di nascita
     * @param string $s sesso
     */
    public function __construct($n,$c,$cf,$d,$s){
        $this->name=$n;
        $this->surname=$c;
        $this->cf=$cf;
        $this->dateB=$d;
        $this->gender=$s;
        $this->encCF=md5($cf);
        self::$istances[]=$this;
    }
    
    /**
     * Restituisce il nome del paziente
     * 
     * @return string
     */
    public function getName(){
        return $this->name;
    }
    
    /**
     * Restituisce il cognome del paziente
     * 
     * @return string
     */
    public function getSurname(){
        return $this->surname;
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
     * Restituisce la data di nascita del paziente 
     * 
     * @return string
     */
    public function getDateBirth(){
        return $this->dateB;
    }
    
    /**
     * Restituisce il sesso del paziente 
     * 
     * @return string
     */
    public function getGender(){
        return $this->gender;
    }
    
    /**
     * Restituisce l'md5 del codice fiscale del paziente 
     * 
     * @return string
     */
    public function getEncCF(){
        return $this->encCF;
    }
}
