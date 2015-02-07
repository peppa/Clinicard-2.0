<?php

/**
 * Controllore per le chiamate ajax, assegna a ogni chiamata il relativo 
 * controllore e funzione
 */
class CAjaxSwitcher{
    
    /**
     * In base al "task" ottenuto dallo starto entity, lo switch assegna la funzione
     * corrispondente che risponde alla chiamata
     */
    public function __construct() {
        $VHome=  USingleton::getInstance('VHome');
        $task=$VHome->get('task');
        
        switch($task) {
            
            case 'preFillPat':
                $CPatientsDB=  USingleton::getInstance('CPatientsDB');
                $CPatientsDB->preFillPat();
                break;
            
            case 'preFillCheck':
                $CPatientsDB=  USingleton::getInstance('CPatientsDB');
                $CPatientsDB->preFillCheck();
                break;
            
            case 'checkUsername':
                $CRegistration=  USingleton::getInstance('CRegistration');
                $CRegistration->checkUsername();
                break;
            
            case 'checkEmail':
                $CRegistration= USingleton::getInstance('CRegistration');
                $CRegistration->checkEmail();
                break;
            
            case 'checkLastVisit':
                $CPatientsDB=  USingleton::getInstance('CPatientsDB');
                $CPatientsDB->checkLastVisit();
                break;
            
            case 'checkCFPatient':
                $CPatientsDB=  USingleton::getInstance('CPatientsDB');
                $CPatientsDB->checkCF();
                break;
            
            case 'checkCFUser':
                $CRegistration= USingleton::getInstance('CRegistration');
                $CRegistration->checkCFUser();
                break;
            
            case "saveEvent":
                $CVisitBooking= USingleton::getInstance("CVisitBooking");
                $CVisitBooking->saveEvent();
                break;
            
            case 'login':
                $CLogin=  USingleton::getInstance('CLogin');
                $CLogin->manageLogin();
                break;
            
            case 'checkLoggedIn':
                $CLogin=  USingleton::getInstance('CLogin');
                $CLogin->checkLoggedInAjax();
                break;
            
            case 'logout':
                $CLogin=  USingleton::getInstance('CLogin');
                $CLogin->logout();
                break;
            
            case "getMyEvents":
                $CVisitBooking= USingleton::getInstance("CVisitBooking");
                $CVisitBooking->getMyEvents();
                break;
            
            case "getUserData":
                $CVisitBooking=new CVisitBooking();
                $CVisitBooking->getUserData();
                break;
            
            case "getMyPlaceHolders":
                $CVisitBooking= USingleton::getInstance("CVisitBooking");
                $CVisitBooking->getMyPlaceHolders();
                break;
            
            case "deleteEvent":
                $CVisitBooking= USingleton::getInstance("CVisitBooking");
                $CVisitBooking->deleteEvent();
                break;
        }
    }
    
    
}

