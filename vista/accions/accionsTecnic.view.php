<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div class="materialContainer">
        <h3>Afegir accions a una incidencia </h3>
        <div class="input">
            <label for="codi">Codi</label>
            <input type="text" name="codi" id="codi">
            <span class="spin"></span>
        </div>
        <div class="input">
            <label for="codi">Afegir accio</label>
            <input type="text" name="accio" id="codi">
            <span class="spin"></span>
        </div>
        <div>
            <input type="submit" name="submit" value="Afegir"> <i class="fa fa-check"></i>
        </div>
    </div>
</form>
