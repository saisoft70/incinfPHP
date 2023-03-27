<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div class="materialContainer">
        <h3>Tancar incidencia</h3>
        <div class="input">
            <label for="codi">Codi</label>
            <input type="text" name="codi" id="codi">
            <span class="spin"></span>
        </div>
        <div>
            <input type="submit" name="submit" value="Buscar"> <i class="fa fa-check"></i>
        </div>
    </div>
</form>