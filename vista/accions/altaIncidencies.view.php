<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div class="materialContainer">
        <h3>Alta tipus d'incidencies</h3>
        <div class="input">
            <label for="name">Estat de la incidencia (marcada és qué està activa)</label>
            <input type="checkbox" name="estat" id="name" required>
            <span class="spin"></span>
        </div>
        <div class="input">
            <label for="name">Detalls del problema d'incidencia </label>
            <input type="text" name="detalls" id="name" required>
            <span class="spin"></span>
        </div>
        <div class="input">
            <label for="name">Codi del recurs d'incidencia </label>
            <input type="text" name="codirecurs" id="name" required>
            <span class="spin"></span>
        </div>
        <div class="input">
            <label for="name">Codi del tècnic asignat </label>
            <input type="text" name="coditecnic" id="name" required>
            <span class="spin"></span>
        </div>

        <div class="input">
            <label for="name">Codi del usuari de la incidencia </label>
            <input type="text" name="codiusuari" id="name" required>
            <span class="spin"></span>
        </div>
        <div class="input">
            <label for="name">Codi Tipus Incidencia </label>
            <input type="text" name="tipusIncidencia" id="name" required>
            <span class="spin"></span>
        </div>
        <div class="button login">
            <input type="submit" name="submit" value="Inserir"> <i class="fa fa-check"></i>
        </div>
    </div>
</form>