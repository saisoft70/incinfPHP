<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div class="materialContainer">
        <h3>Alta tipus d'incidencies</h3>
        <div class="input">
            <label for="name">Descripció de la incidencia </label>
            <input type="text" name="descripcio" id="name" required>
            <span class="spin"></span>
        </div>

        <div class="button login">
            <input type="submit" name="submit" value="Inserir"> <i class="fa fa-check"></i>
        </div>
    </div>
</form>