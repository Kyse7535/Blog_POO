<?php $title = "Add article"; ?>
<?php ob_start(); ?>
<?php require_once("./Vue/header.php"); ?>
<style>
<?php require_once("./Vue/CSS/ajouter_article.css");
?>
</style>
<!-- Section: form gradient -->
<main>
    <form action="index.php?action=add" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Formulaire</legend>
            <label for="">Auteur</label><br>
            <input type="text" name="auteur"><br>
            <label for="">Titre</label><br>
            <input type="text" name="titre"><br>
            <label for="">contenu</label><br>
            <textarea name="contenu" id="" cols="30" rows="5"></textarea>
            <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
            <p>Choisissez une photo avec une taille inférieure à 2 Mo</p><br>

            <input type="file" name="photo"><br>
            <input type="submit" value="Enoyer">
        </fieldset>
    </form>
</main>
<!-- Section: form gradient -->

<?php require("./Vue/footer.php"); ?>
<?php $content = ob_get_clean(); ?>
<?php require("./Vue/template.php"); ?>