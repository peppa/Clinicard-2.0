<div class="title">
    <p>PAZIENTE: {$name} {$surname} {$CF}</p>
</div>

<div class="clear"></div>

<form method="POST">
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Data della visita</label></p>
            <p><input class="input-field" id="dateC" type="date" name="dateCheck" /></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Anamnesi</label></p>
            <p><textarea class="input-area" id="medH" rows="4" cols="40" name="medHistory"></textarea></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Esame obiettivo</label></p>
            <p><textarea class="input-area" id="medE" rows="4" cols="40" name="medExam"></textarea></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Conclusioni</label></p>
            <p><textarea class="input-area" id="conc" rows="4" cols="40" name="conclusions"></textarea></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Prescrizione esami</label></p>
            <p><textarea class="input-area" id="toDoE" rows="4" cols="40" name="toDoExams"></textarea></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Terapia</label></p>
            <p><textarea class="input-area" id="ter" rows="4" cols="40" name="terapy"></textarea></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Controllo</label></p>
            <p><textarea class="input-area" id="check" rows="4" cols="40" name="checkup"></textarea></p>
        </div>
    </div>
    
    <div class="row">
        <p> <button class="controlButton" type="submit" formaction="index.php?control=manageDB&action=modCheck&mod=completed&p={md5($CF)}&ch={md5($check)}"/>invia dati</button>
            <button class="controlButton" type="reset"/>reset</button>
            <button class="controlButton" type="submit" formaction="index.php?control=manageDB&action=getFullData&p={md5($CF)}&ch={md5($check)}"/>annulla</button>
        </p>
    </div>
</form>
    
<div class="spacing"></div>