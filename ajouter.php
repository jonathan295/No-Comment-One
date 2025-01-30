<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>
<body> -->
    <?php include("navbar.php");?>
<main>

    <form action="index.php?action=register-membre" method="post" >
        <h2 style="text-align:center">Ajouter un Identifiant</h2>
        <label for="nom">Nom :</label>
        <input type="text" name="nom">
        <label for="prenom">Prenom :</label>
        <input type="text" name="prenom">
        <label for="date_naissance">
            Date de naissance :
        </label>
        <input type="date" name="date_naissance">
        <label for="lieu">Lieu de naissance:</label>
        <input type="text" name="lieu_naissance">

        <div class="genre">
            <div>
                <input type="radio" name="genre" value="masculin">
                    Masculin
            </div>
            <div>
                <input type="radio" name="genre" value="feminin">
                    Féminin
            </div>
        </div>
        <label for="pere">Père :</label>
        <input type="text" name="pere">
        <label for="mere">Mère :</label>
        <input type="text" name="mere">
        <label for="fokontany">Fokontany :</label>
        <input type="text" name="nomFokontany">
        <input type="submit"  name="btnRegister" value="Soumetre">    

    </form>

    <?php include("footer.php");?>
</main>
</body>
</html>