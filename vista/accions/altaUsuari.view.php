<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div class="materialContainer">
        <h3>Inserir Usuari </h3>
        <div class="input">
            <label for="name">Username </label>
            <input type="text" name="name" id="name" required>
            <span class="spin"></span>
        </div>
        <div class="input">
            <label for="pass">Contrasenya </label>
            <input type="password" name="pass" id="pass" required>
            <span class="spin"></span>
        </div>
        <div class="input">
            <label for="pass">Nom </label>
            <input type="text" name="nomLlarg" id="name" required>
            <span class="spin"></span>
        </div>
        <div class="input">
            <label for="pass">Cognoms </label>
            <input type="text" name="cognoms" id="name" required>
            <span class="spin"></span>
        </div>
        <div class="input">
            <label for="pass">Mail usuari </label>
            <input type="email" name="mail" id="name" required>
            <span class="spin"></span>
        </div>
        <div class="input">
            <label for="pass">Telefon usuari </label>
            <input type="text" name="telefon" id="name" required>
            <span class="spin"></span>
        </div>
        <div class="button login">
            <input type="submit" name="submit" value="Inserir"> <i class="fa fa-check"></i>
        </div>
    </div>
</form>