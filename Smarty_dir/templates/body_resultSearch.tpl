<div class="title">
    <p>{strtoupper($message)}</p>
</div>

<div class="spacing"></div>

{if $numResults!=0}
<div class="DBTable">
<table>
    <tbody>
        <tr>
            <td>Nome</td>
            <td>Cognome</td>
            <td>Codice Fiscale</td>
            <td>Data di nascita</td>
            <td>Sesso</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        {foreach $rows as $patient}
            <tr>
                <td>{$patient.name}</td> <td>{$patient.surname}</td> <td>{$patient.cf}</td> <td>{$patient.dateBirth}</td> <td>{$patient.gender}</td>
                <td><a href="index.php?control=manageDB&action=getChecks&p={$patient.link}"><button class="navButton">vai</button></a></td>
                <td><a href="index.php?control=manageDB&action=modPat&p={$patient.link}"><button class="navButton">modifica</button></a></td>
                <td><a href="index.php?control=manageDB&action=delPat&p={$patient.link}"><button class="navButton">elimina</button></a></td>
            </tr>
        {/foreach}
    </tbody>
</table>
</div>
{/if}

<div class="spacing"></div>