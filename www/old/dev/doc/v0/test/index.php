<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Alpha et Beta testeur documentation - simple-work.tk</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="The official website of SimpleWork project">
        <meta name="keywords" content="SimpleWork,Simple,Work,PHP,JS,web,editor,editeur,site,official,officiel,fr,gb,en,français,francais,english">
        <meta name="author" content="Louis Maillard">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.min.css">
    </head>
<?php
if(isset($_GET['code'])) {
    $goodkey = array(
        '83037' => "loulou123546"
    );
    foreach ($goodkey as $key => $value) {
        if($_GET['code'] == $key) {
            ?>
    <body>
        <h1 class="w3-center" >Salut <?php echo $value; ?> !</h1>
    </body>
            <?php
        }
        else { ?>
    <body class="w3-display-container" style="height: 500px;">
        <h1 class='w3-center'>Erreur dans le code</h1>
        <div class="w3-center w3-display-middle">
            <form action="" method="get" class="w3-conatainer">
                <label>Entrer votre code de testeur :</label><br/>
                <input type="number" name="code" min="0" max="999999" autofocus>
                <input type="submit" value="Valider">
            </form>
        </div>
    </body>
<?php
        }
    }
}
else { ?>
    <body class="w3-display-container" style="height: 500px;">
        <div class="w3-center w3-display-middle">
            <form action="" method="get" class="w3-conatainer">
                <label>Entrer votre code de testeur :</label><br/>
                <input type="number" name="code" min="0" max="999999" autofocus>
                <input type="submit" value="Valider">
            </form>
        </div>
    </body>
<?php
}
?>