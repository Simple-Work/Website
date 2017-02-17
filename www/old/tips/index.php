<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Astuces - simple-work.tk</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="The official website of SimpleWork project">
        <meta name="keywords" content="SimpleWork,Simple,Work,PHP,JS,web,editor,editeur,site,official,officiel,fr,gb,en,français,francais,english">
        <meta name="author" content="Louis Maillard">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.min.css">
    </head>
<?php
if(isset($_GET['id'])) {
    if($_GET['id'] == "last") {
        try {
            $conn = new PDO ("mysql:host=localhost;dbname=content;charset=utf8;", "contentMAN", "content#123546");
            $req = $conn->prepare("SELECT * FROM `tips` ORDER BY ID DESC LIMIT 1");
            $req->execute();
            $res = $req->fetch();
        } catch (Exception $e) {
            $error = true;
        }
    }
    else {
        $y = str_split($_GET['id']);
        $z = "";
        foreach($y as $value){
            switch($value){
                case "1": $z.= "1";break;
                case "2": $z.= "2";break;
                case "3": $z.= "3";break;
                case "4": $z.= "4";break;
                case "5": $z.= "5";break;
                case "6": $z.= "6";break;
                case "7": $z.= "7";break;
                case "8": $z.= "8";break;
                case "9": $z.= "9";break;
                case "0": $z.= "0";break;
            } }
        try {
            $conn = new PDO ("mysql:host=localhost;dbname=content;charset=utf8;", "contentMAN", "content#123546");
            $req = $conn->prepare("SELECT * FROM `tips` WHERE ID = ".$z);
            $req->execute();
            $res = $req->fetch();
            if($res == null){ $error = true; }
        } catch (Exception $e) {
            $error = true;
        }
    }
}
else {
    try {
        $conn = new PDO ("mysql:host=localhost;dbname=content;charset=utf8;", "contentMAN", "content#123546");
        $req = $conn->prepare("SELECT * FROM `tips` ORDER BY ID DESC LIMIT 1");
        $req->execute();
        $res = $req->fetch();
    } catch (Exception $e) {
        $error = true;
    }
}

if($error == true) {
    ?>
    <body>
        <!-- Header -->
        <div class="w3-blue-grey" style="padding-top: 15px;padding-left: 15px;"><a href="http://www.simple-work.tk"><i class="fa fa-arrow-left fa-3x"></i></a></div>
        <div class="w3-container w3-blue-grey w3-center w3-padding-64">
            <h1 class="w3-margin w3-jumbo"><i class="fa fa-lightbulb-o"></i> L'astuce de la semaine</h1>
        </div>

        <div class="w3-container w3-blue-grey w3-center w3-opacity w3-padding-64">
            <?php
            $prec = $z - 1;
            $suiv = $z + 1;
            echo "<a class='w3-left w3-large' href='?id=".$prec."'>< Précédent</a><a href='?id=".$suiv."' class='w3-right w3-large'>Suivant ></a>";
            ?>
            <h1 class="w3-margin w3-xxlarge">Impossible de récupérer l'astuce</h1>
            <p class="w3-xlarge">L'astuce que vous rechecher n'éxiste pas.</p>
        </div>
    </body>
    <?php
}
else {
    ?>
    <body>
        <!-- Header -->
        <div class="w3-blue-grey" style="padding-top: 15px;padding-left: 15px;"><a href="http://www.simple-work.tk"><i class="fa fa-arrow-left fa-3x"></i></a></div>
        <div class="w3-container w3-blue-grey w3-center w3-padding-64">
            <h1 class="w3-margin w3-jumbo"><i class="fa fa-lightbulb-o"></i> L'astuce de la semaine</h1>
        </div>

        <div class="w3-container w3-blue-grey w3-center w3-opacity w3-padding-64">
            <?php
            $prec = $res['ID'] - 1;
            $suiv = $res['ID'] + 1;
            echo "<a class='w3-left w3-large' href='?id=".$prec."'>< Précédent</a><a href='?id=".$suiv."' class='w3-right w3-large'>Suivant ></a>";
            ?>
            <h1 class="w3-margin w3-xxlarge"><?= $res['NAME'] ?></h1>
            <p class="w3-large"><?= $res['CONTENT'] ?></p>
        </div>
    </body>
    <?php
}
?>