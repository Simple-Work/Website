<?php

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Flux RSS - Simple Work</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="The official website of SimpleWork project">
        <meta name="keywords" content="SimpleWork,Simple,Work,PHP,JS,web,editor,editeur,site,official,officiel,fr,gb,en,français,francais,english">
        <meta name="author" content="Louis Maillard">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.min.css">
    </head>
    <body>

        <!-- Header -->
        <div class="w3-orange" style="padding-top: 15px;padding-left: 15px;"><a href="http://www.simple-work.tk"><i class="fa fa-arrow-left fa-3x"></i></a></div>
        <div class="w3-container w3-orange w3-center w3-padding-64">
            <h1 class="w3-margin w3-jumbo"><i class="fa fa-rss-square"></i> Flux RSS</h1>
        </div>

        <!-- 1ere ligne -->
        <div class="w3-row-padding w3-center w3-margin-top">
            <div class="w3-half">
                <div class="w3-card-2 w3-padding-top" style="min-height:1000px">
                    <h3>Les news de Simple Work</h3>
                    <i class="fa fa-newspaper-o w3-margin-bottom w3-text-orange" style="font-size:120px"></i><br/><hr/><br/>
                    <?php
                    $texte = fread($file = fopen("rss.xml", "r"), filesize("rss.xml")); fclose($file);
                    $texte = str_replace("\n", "", $texte);
                    $texte = preg_replace("/<\?xml(?:.*)<\/language>/i", "", $texte);
                    $texte = preg_replace("/<\/channel>(?:.*)<\/rss>/i", "", $texte);

                    $final = preg_replace("/<item>(?:.*?)<title>(.*?)<\/title>(?:.*?)<link>(.*?)<\/link>(?:.*?)<description>(.*?)<\/description>(?:.*?)<\/item>/i", "<div><h3>$1</h3><br/><p>$3</p><a href='$2'>voir le lien</a></div><br/><hr/><br/>", $texte, 3);
                    $final = preg_replace("/<item>(?:.*)<\/item>/i", "", $final);

                    echo $final;
                    ?>
                </div>
            </div>
            <div class="w3-half">
                <div class="w3-card-2 w3-padding-top" style="min-height:342px">
                    <h3>Comment vous abonnez au flux RSS ?</h3>
                    <i class="fa fa-user-plus w3-margin-bottom w3-text-orange" style="font-size:120px"></i>
                    <p>Utiliser votre lecteur de flux RSS et ajouter y "http://www.simple-work.tk/rss/rss.xml".</p>
                    <p>Vous n'avez de lecteur RSS ou vous ne savez pas ce que c'est ? alors je vous conseille cet <a href="http://www.journaldunet.com/solutions/saas-logiciel/rss.shtml">article</a> !</p>
                </div>
                <div class="w3-card-2 w3-padding-top" style="min-height:642px">
                    <h3>Comment intégrer le flux RSS à votre site</h3>
                    <i class="fa fa-code w3-margin-bottom w3-text-orange" style="font-size:120px"></i>
                    <p>Si vous utilisez un CMS comme WordPress, alors utiliser simplement le widget "lecteur de flux RSS" en y indiquant le lien "http://www.simple-work.tk/rss.xml".</p>
                    <p>Sinon, vous pouvez ajouter le code suivant à votre site :</p>
                    <pre><code>&lt;iframe src="http://www.simple-work.tk/rss/iframe.php?limit=3" frameborder="0" width="100%" height="500px"&gt;&lt;/iframe&gt;</code></pre>
                    <h4>Explication :</h4>
                    <p>http://www.simple-work.tk/rss/iframe.php<b>?limit=<span style="color:#00F;">3</span></b> : lien + <b>limite du nombre d'article défini à <span style="color:#00F;">3</span></b> ("limit" ne peut être qu'un nombre entier. Si non défini, "limit" = 5)</p>
                    <p>frameborder="0" : pas de bordure<br/>
                    width="100%" : largeur à 100%</br/>
                    height="500px" : hauteur à 500 pixel</p>
                    <p>Vous êtes libre de modifier les paramètres selon vos besoins</p>
                </div>
            </div>
        </div>
    </body>
</html>