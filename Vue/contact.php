<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="icon" href="Vue/CSS/volks.png" type="image/gif" sizes="16x16">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,200;1,300;1,400;1,500;1,600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="Vue/CSS/index.css">
    <link rel="stylesheet" href="Vue/CSS/contact.css">
</head>

<body>
    <?php require("header.php"); ?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 ligne col-md-8 offset-md-2 ">
                    <div class="text">
                        <h4 class="py-2">Contactez moi</h4>
                        <p>VOUS ÊTES UN LECTEUR: Ceci est un paragraphe. Survolez-moi avec votre souris d'ordinateur et
                            cliquez une fois pour que le menu s'affiche. Double-cliquez pour éditer directement le
                            texte. Vous pouvez aussi me déplacer n'importe où sur la page par la méthode du «Glisser et
                            Déposer»
                        </p>
                        <p>VOUS ÊTES ANNONCEUR OU SPONSOR: Ceci est un paragraphe. Survolez-moi avec votre souris
                            d'ordinateur et cliquez une fois pour que le menu s'affiche. Double-cliquez pour éditer
                            directement le texte. Vous pouvez aussi me déplacer n'importe où sur la page par la méthode
                            du «Glisser et Déposer»
                        </p>

                    </div>
                    <img src="Vue/CSS/image3.jpg" alt="description" class="img-fluid px-2">
                </div>
            </div>
            <div class="row my-5">
                <div class="col-12 col-md-8 offset-md-2 ligne">
                    <form action="">
                        <label for="nom">Nom</label><br>
                        <input type="text" name="nom"><br>
                        <label for="prenom">Prenom</label><br>
                        <input type="text" name="prenom">
                        <label for="">Email</label><br>
                        <input type="text"><br>
                        <label for="">Message</label><br>
                        <textarea name="" id="" rows="5"></textarea>
                    </form>
                    <img src="Vue/CSS/image1.jpg" alt="description" class="img-fluid px-2">
                </div>
            </div>
        </div>
    </main>
    <?php require("footer.php"); ?>
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js">
    </script>
</body>

</html>