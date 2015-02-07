<?php


class VHome extends View {
      
    /**
     * Carica la pagina statica dei servizi
     * 
     * @return string
     */
    public function getServicesContent(){
        $body=$this->fetch('services.tpl');
        return $this->makeContentArray($body);
    }
    
    /**
     * Carica la pagina statica dei contatti
     * 
     * @return string
     */
    public function getContactsContent(){
        $body=$this->fetch('contact.tpl');
        return $this->makeContentArray($body);
    }
    
    /**
     * Carica il contenuto della home page del sito
     * 
     * @return string
     */
    public function getHomeContent() {
        $body=$this->fetch('body_home.tpl');
        return $this->makeContentArray($body);
        
    }
    

}