<div class="title">
    <p>PAZIENTE: {$name} {$surname} {$CF}</p>
</div>

<div class="spacing"></div>

<form method="POST">
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Data della visita</label></p>
            <p><input id="dateChDB" class="input-field" type="date" name="dateCheck" /></p>
            <p id="dateCh-err-DB" class="no-input" hidden><p>
            
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Anamnesi</label></p>
            <p><textarea class="input-area" rows="4" cols="40" name="medHistory"></textarea></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Esame obiettivo</label></p>
            <p><textarea class="input-area" rows="4" cols="40" name="medExam"></textarea></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Conclusioni</label></p>
            <p><textarea class="input-area" rows="4" cols="40" name="conclusions"></textarea></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Prescrizione esami</label></p>
            <p><textarea class="input-area" rows="4" cols="40" name="toDoExams"></textarea></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Terapia</label></p>
            <p><textarea class="input-area" rows="4" cols="40" name="terapy"></textarea></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Controllo</label></p>
            <p><textarea class="input-area" rows="4" cols="40" name="checkup"></textarea></p>
        </div>
    </div>
    
    <div class="row">
        <p> <button id="insertNewCh" class="controlButton disabled" type="submit" formaction="index.php?control=manageDB&action=newVisit&sent=y&p={md5($CF)}" disabled/>invia dati</button>
            <button id="reset" class="controlButton" type="reset"/>reset</button>
            <button class="controlButton" type="submit" formaction="index.php?control=manageDB&action=getChecks&p={md5($CF)}"/>annulla</button>
        </p>
    </div>
</form>
    
<div class="spacing"></div>