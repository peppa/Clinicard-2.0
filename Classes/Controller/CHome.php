<?php

class CHome {  

    /**
     * Richiama le funzioni che costruiscono e stampano la pagina
     */
    public function start() {
        $this->buildPage();
        $this->showPage();
    }
    
    /**
     * Costruisce la struttura della pagina in base a ciò che viene
     * passao dallo switch. Se non lo switch non ritorna alcun valore 
     * assegna la pagina home
     */
    public function buildPage() {
        $content=$this->controlSwitch();
        $VHome=USingleton::getInstance('VHome');
        //!content= need to show homepage
        if(!$content){
            $content=$VHome->getHomeContent();            
        }
        
        $this->setPage($content);
    }
    
    
    /**
     * Assegna Header,Body e Footer in base al contenuto dell'array $content
     * 
     * @param array $content
     */
    public function setPage($content) {
        $VHome=  USingleton::getInstance("VHome");
        foreach ($content as $key => $value) {
            if($value){
                switch ($key) {
                    case "body":
                        $VHome->setBody($value);
                        break;

                    case "header":
                        $VHome->setHeader($value);
                        break;

                    case "footer":
                        $VHome->setFooter($value);
                        break;
                }
            }
        }
    }
    
    
    /**
     * Stampa la pagina una volta che è stata costruita da buildPage. Il contenuto è diverso
     * a seconda che l'utente sia un medico (o admin) oppure no
     */
    public function showPage() {
        $VHome=  USingleton::getInstance('VHome');
        $FUtente=  USingleton::getInstance('FUtente');
        $USession=  USingleton::getInstance('USession');
        if ($FUtente->isMedic($USession->get('username'))){
            $VHome->showPage(true);
        }
        else {
            $VHome->showPage(false);            
        }
    }

    /**
     * Funzione principale del programma, vi passa ogni metodo o chiamata di qualunque controllore,
     * comprese le chiamate ajax. Il suo comportamento dipende dal comando che gli viene
     * passato dallo strato Entity
     * 
     * 
     * @return null|string[] HTML content, false if no HTML returned
     */
    public function controlSwitch() {
        $VHome=Usingleton::getInstance('VHome');

        $action=$VHome->get('control');
        switch ($action) {
            
            case 'VisitBooking':
                $CVisitBooking=  USingleton::getInstance('CVisitBooking');
                return $CVisitBooking->getContent();
                
            case 'manageDB':
                $CPatientsDB=  USingleton::getInstance('CPatientsDB');
                $VHome=  USingleton::getInstance('VHome');
                return $VHome->makeContentArray($CPatientsDB->getBody(),$CPatientsDB->getHeader());

            case 'Services':
                return $VHome->getServicesContent();

            case 'Registration':
                $CRegistration=  USingleton::getInstance('CRegistration');
                return $VHome->makeContentArray($CRegistration->newUser(),$CRegistration->getHeader());

            case 'Contacts':
                return $VHome->getContactsContent();
                
            case 'ajaxCall':
                USingleton::getInstance('CAjaxSwitcher');
                break;
            
            default:
                return $VHome->getHomeContent();
        }
    }




}
