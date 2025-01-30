<?php 
include("navbar.php");
?>
<main>
    <form action="">
        <h2 style="text-align:center;">Modifier Information</h2>
        <label for="nom">Nom:</label>
        <input type="text" name="nom">
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom">
        <label for="profession">Profession</label>
        <input type="text" name="profession">
        <input type="submit" value="Confirmer">
    </form>
    <?php
    include("footer.php");
    ?>
</main>
</body>
</html>