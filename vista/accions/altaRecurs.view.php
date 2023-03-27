<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div class="materialContainer">
        <h3>Alta de recurs </h3>
        <div class="input">
            <label for="name">Recurs Codi relacionat amb el tipus de recurs </label>
            <input type="text" name="codi" id="name" required>
            <span class="spin"></span>
        </div>
        <div class="input">
            <label for="name">Nom del Recurs </label>
            <input type="text" name="recurs" id="name" required>
            <span class="spin"></span>
        </div>

        <div class="button login">
            <input type="submit" name="submit" value="Inserir"> <i class="fa fa-check"></i>
        </div>
    </div>
</form>