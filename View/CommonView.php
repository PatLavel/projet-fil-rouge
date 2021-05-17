<?php
function htmlhead(string $title, string $hrefStyle): void
{
?>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href=<?php echo $hrefStyle ?>>
        <title><?php echo $title ?></title>
    </head>

<?php
}

function htmlheader(): void
{
?>
    <header>
        <div class="header">
            <div class="h_left">
                <a href=""><img class="logo_nemelade" src="../Style/logo_blanc.png" alt="logo_nemelade" /></a>
            </div>
            <div class="h_middle">
                <a href="" class="HeadText">Accueil</a>
                <a href="../Controller/Projet_Forum.php" class="HeadText">Forum</a>
                <a href="../Controller/Zomvid.html" class="HeadText">Actualités</a>
                <a href="" class="HeadText">Arène</a>
            </div>
            <div class="h_right1">
                <a href="modification_compte.html"><img class="logo_user" title="logo_blanc" src="../Style/user_pic.png" alt="logo_nemelade" /></a>
                <div class="h_right2">
                    <a href="../Controller/Connexion.html" class="lien_co">Connexion</a>
                    <a href="../Controller/creation_compte.html" class="lien_insc">Inscription</a>
                </div>
            </div>
        </div>
    </header>

<?php
}
?>