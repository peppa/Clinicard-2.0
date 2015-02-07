<div class="title">
    <p>COMPILA LA FORM PER REGISTRARTI</p>
</div>

<div class="spacing"></div>
<form id="registration-form" method="POST" action="index.php?control=Registration&action=addUser">
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Nome</label></p>
            <p><input class="input-field" id="nameReg" type="text" name="name" placeholder="Nome"></p>
            <p id="name-err" class="no-input" hidden></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Cognome</label></p>
            <p><input class="input-field" id="surnameReg" type="text" name="surname" placeholder="Cognome"/></p>
            <p id="surname-err" class="no-input" hidden></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Codice Fiscale</label></p>
            <p><input class="input-field" id="cfReg" type="text" name="CF" placeholder="Codice Fiscale"/></p>
            <p id="cf-err" class="no-input" hidden></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Indirizzo Email</label></p>
            <p><input class="input-field" id="email" type="text" name="email" placeholder="Email"/></p>
            <p id="email-err" class="no-input" hidden></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Username</label></p>
            <p><input class="input-field" id="username" name="username" placeholder="Username" autocomplete="off"></p>
            <p id="username-err" class="no-input" hidden></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Password</label></p>
            <p><input class="input-field" id="password" type="password" name="password1" placeholder="Password"></p>
            <p id="pass-strength" hidden></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Ripeti password</label></p>
            <p><input class="input-field" id="password-repeat" type="password" name="password2" placeholder="Password"></p>
            <p id="pass-match" hidden></p>
        </div>
    </div>
    
    <div class="row-buttons">
        <p> <button class="controlButton disabled" id="registration-button" type="submit"/>Registrati</button>
            <button class="controlButton" id="reset" type="reset"/>reset</button>
        </p>
    </div>
</form>

<div class="spacing"></div>