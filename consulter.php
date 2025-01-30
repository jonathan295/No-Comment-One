<?php
include("navbar.php");
?>
<main>
    <form action="">
        <h2 style="text-align:center;">Faire un recherche</h2>
        <label for="nom">Nom</label>
        <input type="text" name="nom">
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom">
        <label for="cin">
            N° CIN:
        </label>
        <input type="text" name="cin">
        <label for="fokotany">
            Fokotany:
        </label>
        <input type="text" name="fokotany">
        <input type="submit" value="Rechercher">
    </form>
    <table>
        <thead>
            <td>Nom et Prénom</td>
            <td>Genre</td>
            <td>Date et Lieu de naissance</td>
            <td>C.I.N</td>
            <td>Profession</td>
        </thead>
        <tr>
            <td>ANDRIAMIHAJAMANANA<br>Anjara</td>
            <td>M</td>
            <td>15 Novembre 2005<br>Antananarivo II</td>
            <td>301 102 514 120</td>
            <td>Ménagère</td>
        </tr>
    </table>
    <div class="consulter">
        <a href="modifier.php" class="modifier">
            Modifier
        </a>
        <div class="creer">
            <div class="handle">
                Créer
            </div>
            <div class="fonctions">
                <a href="#">
                    C.I.N
                </a>
                <a href="#">
                    Copie de naissance
                </a>
            </div>
        </div>
    </div>
    <?php 
    include("footer.php");
    ?>
</main>
</body>
</html>