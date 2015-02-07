<?php

/**
 * Questa classe gestisce le chiamate alle funzioni della libreria Fpdf, la quale è utlizzata 
 * per stampare il report della visita di un paziente in formato pdf
 */
class Updf extends fpdf {

    /**
     * Intestazione del documento, contiene alcune informazione generali sul medico 
     * e sulla clinica ed è comune a tutti i report stampati
     */
    function Header(){
            $title="ASL 01 - Avezzano-Sulmona-L'Aquila \n P.O. San Salvatore - L'Aquila \n U.O.C. Pneumologia \n Dott. Paolo Carducci";
            $this->SetFont('Arial','',11);
            $this->MultiCell(0,5,$title,0,'C');
            $this->Ln(10);
    }

    /**
     * Stampa in numero della pagina in fondo
     */
    function Footer(){
            $this->SetY(-15); //prints pageNo at the bottom
            $this->SetFont('Arial','I',8);
            $this->SetTextColor(128);
            $this->Cell(0,10,'Pagina '.$this->PageNo(),0,0,'C');
    }

    /**
     * Stampa luogo e data in cui viene creato il report. Il luogo è sempre "L'Aquila" 
     *
     * @param type $dateString string data formattata in formato italiano
     */
    function PlaceAndDate($dateString){
            $this->SetFont('Arial','B',11);
            $this->Cell(0,5,"L'Aquila, ".$dateString,0,1,'C',false);
            $this->Ln(10);
    }

    /**
     * Stampa Nome, cognome e codice fiscale del paziente
     * 
     * @param type $string nome, cognome e cf
     */
    function patientInfo($string){
            $this->SetFont('Arial','',11);
            $this->MultiCell(0,5,$string,0,'L');
            $this->Ln(10);
    }

    /**
     * Titolo di ogni campo del report es. Anamnesi, è scritto in grassetto
     * 
     * @param type $title nome del campo che viene stampato
     */
    function fieldTitle($title){
            $newTitle=$this->transformText($title); //translates in italian and makes it upper case
            $this->SetFont('Arial','B',11);
            $this->Cell(0,5,$newTitle,0,1,'L',false);
    }

    /**
     * Stampa in contenuto relativo al campo fieldTitle
     * 
     * @param type $body string valore del campo
     */
    function fieldBody($body){
            $this->SetFont('Arial','',11);
            $this->MultiCell(0,5,$body,0,'L');
            $this->Ln(10);
    }

    /**
     * Per ogni campo che il medico ha scelto di stampare, stampa prima il suo tuitolo
     * e successivamente il suo valore
     * 
     * @param type $title string nome del campo
     * @param type $body string valore del campo
     */
    function printField($title,$body){
            $this->fieldTitle($title);
            $this->fieldBody($body);
    }

    /**
     * Gestisce la stampa dell'intero report
     * 
     * @param type $string1 string dati del paziente
     * @param type $arrayInfo array associativo del tipo campo => valore con tutti i campi scelti dal medico
     * @param type $dateString string luogo e data
     */
    function printPage($string1,$arrayInfo,$dateString){
            $this->AddPage();
            $this->PlaceAndDate($dateString);
            $this->patientInfo($string1);
            foreach ( $arrayInfo as $key=>$value ) {
                    $this->printField($key,$value);
            }
        $this->Output();
    }

    /**
     * Traduce i nomi dei campi da inglese (come sono ricevuti dal codice php) a italiano
     * 
     * @param type $string string nome del campo in inglese
     * @return type string nome del campo in italiano
     */
    function transformText($string){

            switch ($string){

                    case 'dateCheck': $title='data della visita';
                    break;

                    case 'medHistory': $title='anamnesi';
                    break;

                    case 'medExam': $title='esame obiettivo';
                    break;

                    case 'conclusions': $title='conclusioni';
                    break;

                    case 'toDoExams': $title='esami prescritti';
                    break;

                    case 'terapy': $title='terapia';
                    break;

                    case 'checkup': $title='controllo';
                    break;
            }
            $title=strtoupper($title);
            return $title;
    }


}