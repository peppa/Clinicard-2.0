<?php


class EPatient {
    
    /**
     * Nome del paziente
     * @var type string
     */
    public $nome;
    
    /**
     *Cognome del paziente
     * @var type string
     */
    public $cognome;
    
    /**
     * Codice Fiscale del paziente
     * @var type string
     */
    public $cf;
    
    /**
     * Data di nascita del paziente
     * @var type string
     */
    public $dataN;
    
    /**
     * Sesso del paziente (M/F)
     * @var type string
     */
    public $sex;
    
    /**
     * codice fiscale del paziente criptato in md5
     * @var type string
     */
    public $encCF;
    
    /**
     * Array che contiene tutte le istanze di EPatient create
     * @var type array
     */
    public static $istances=array();
    
    /**
     * Crea una nuova istanza di EPatient
     * 
     * @param type $n string nome
     * @param type $c string cognome
     * @param type $cf string codice fiscale
     * @param type $d string data di nascita
     * @param type $s string sesso
     */
    public function __construct($n,$c,$cf,$d,$s){
        $this->nome=$n;
        $this->cognome=$c;
        $this->cf=$cf;
        $this->dataN=$d;
        $this->sex=$s;
        $this->encCF=md5($cf);
        self::$istances[]=$this;
    }
    
    /**
     * Restituisce il nome del paziente
     * @return type string
     */
    public function getName(){
        return $this->nome;
    }
    
    /**
     * Restituisce il cognome del paziente
     * @return type string
     */
    public function getSurname(){
        return $this->cognome;
    }
    
    /**
     * Restituisce il codice fiscale del paziente
     * @return type string
     */
    public function getCF(){
        return $this->cf;
    }
    
    /**
     * Restituisce la data di nascita del paziente 
     * @return type string
     */
    public function getDataN(){
        return $this->dataN;
    }
    
    /**
     * Restituisce il sesso del paziente 
     * @return type string
     */
    public function getSex(){
        return $this->sex;
    }
    
    /**
     * Restituisce l'md5 del codice fiscale del paziente 
     * @return type string
     */
    public function getEncCF(){
        return $this->encCF;
    }
}
