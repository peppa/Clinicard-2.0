<div class="title">
    <p>Tutte le visite del paziente {$name} {$surname}:</p>
</div>

<div class="DBTable" id="patient-checks">
<table>
    <tbody>
        <tr>
            <td>Data della visita</td>
            <td></td>
        </tr>
        {foreach $PatChecks as $visit}
            <tr>
                <td>{$visit}</td>
                <td><a href="index.php?control=manageDB&action=getFullData&p={$pat}&ch={md5($visit)}"><button class="navButton">vai</button></a></td>
            </tr>
        {/foreach}
    </tbody>
</table>
</div>

<div class="spacing"></div>


<div class=center>
    <a href="index.php?control=manageDB&action=newVisit&p={$pat}"><button class="controlButton">Aggiungi visita</button></a>
    <a href="index.php?control=manageDB"><button class="controlButton">Home</button></a>
</div>
    
<div class="spacing"></div>