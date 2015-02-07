
<div class="title">
    <p>SCHEDA DEL PAZIENTE {$info.name} {$info.surname}</p>
    <p>DATA DELLA VISITA: {$info.dateCheck}</p>
</div>
        
<div class="DBTable" id="patient-detail" >
<table>
    <tbody>
        <tr>
            <td>Campo</td> <td>Valore</td>
        </tr>
        
        <tr>
            <td>Nome</td> <td>{$info.name}</td>
        </tr>
        <tr>
            <td>Cognome</td> <td>{$info.surname}</td>
        </tr>
        <tr>
            <td>Sesso</td> <td>{$info.gender}</td>
        </tr>
        <tr>
            <td>Data di nascita</td> <td>{$info.dateBirth}</td>
        </tr>
        <tr>
            <td>Codice Fiscale</td> <td>{$info.CF}</td>
        </tr>
        <tr>
            <td>Data della visita</td> <td>{$info.dateCheck}</td>
        </tr>
        <tr>
            <td>Anamnesi</td> <td>{$info.medHistory}</td>
        </tr>
        <tr>
            <td>Esame Obiettivo</td> <td>{$info.medExam}</td>
        </tr>
        <tr>
            <td>Conclusioni</td> <td>{$info.conclusions}</td>
        </tr>
        <tr>
            <td>Esami Prescritti</td> <td>{$info.toDoExams}</td>
        </tr>
        <tr>
            <td>Terapia</td> <td>{$info.terapy}</td>
        </tr>
        <tr>
            <td>Controllo</td> <td>{$info.checkup}</td>
        </tr>
    </tbody>
</table>
</div>
        
<div class="spacing"></div>

<div class="title">
    <p>SCEGLI UN'AZIONE</p>
</div>



<div class="center">
    <a href="index.php?control=manageDB&action=modCheck&p={md5($info.CF)}&ch={md5($info.dateCheck)}"><button class="controlButton">modifica</button></a>
    <a href="index.php?control=manageDB&action=printReport&pat={md5($info.CF)}&ch={md5($info.dateCheck)}"><button class="controlButton"class="print-report">stampa report</button></a>
    <a href="index.php?control=manageDB&action=delCheck&p={md5($info.CF)}&ch={md5($info.dateCheck)}"><button class="controlButton" id="deleteCheck">cancella</button></a>
    <a href="index.php?control=manageDB&action=getChecks&p={md5($info.CF)}"><button class="controlButton">indietro</button></a>
</div>

<div class="spacing"></div>
