<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div class="materialContainer">
        <h3>Alta de tipus de recurs </h3>
        <div class="input">
            <label for="name">Nom del tipus de recurs </label>
            <input type="text" name="name" id="name" required>
            <span class="spin"></span>
        </div>

        <div class="button login">
            <input type="submit" name="submit" value="Inserir"> <i class="fa fa-check"></i>
        </div>
    </div>
</form>