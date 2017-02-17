<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Développeur - Acceuil - simple-work.tk</title>
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
        <div class="w3-blue" style="padding-top: 15px;padding-left: 15px;"><a href="http://www.simple-work.tk"><i class="fa fa-arrow-left fa-3x"></i></a></div>
        <div class="w3-container w3-blue w3-center w3-padding-64">
            <h1 class="w3-margin w3-jumbo"><i class="fa fa-tachometer"></i> Tableau de bord</h1>
        </div>

        <!-- 1er ligne -->
        <div class="w3-row-padding w3-center w3-margin-top">
            <div class="w3-third">
                <div class="w3-card-2 w3-padding-top" style="min-height:420px">
                    <h3>Bien commencer</h3>
                    <i class="fa fa-rocket w3-margin-bottom w3-text-blue" style="font-size:120px"></i>
                    <p>Désolés, nous travaillons actuellement dessus</p>
                </div>
            </div>
            <div class="w3-third">
                <div class="w3-card-2 w3-padding-top" style="min-height:420px">
                    <h3>Nos guides</h3>
                    <i class="fa fa-book w3-margin-bottom w3-text-blue" style="font-size:120px"></i>
                    <p>Désolés, nous travaillons actuellement dessus</p>
                </div>
            </div>
            <div class="w3-third">
                <div class="w3-card-2 w3-padding-top" style="min-height:420px">
                    <h3>Contribuer</h3>
                    <i class="fa fa-users w3-margin-bottom w3-text-blue" style="font-size:120px"></i>
                    <h4>Vous pouvez nous aider en :</h4>
                    <button style="width:260px" class="w3-btn w3-blue" onclick="document.location.href='http://www.simple-work.tk/contact'">Proposant vos idées</button><br/><br/>
                    <button style="width:260px" class="w3-btn w3-blue" onclick="document.location.href='http://www.simple-work.tk/contact'">Écrivant du code</button><br/><br/>
                    <button style="width:260px" class="w3-btn w3-blue" onclick="document.location.href='http://www.simple-work.tk/contact'">Devenant Alpha-testeur</button><br/><br/>
                </div>
            </div>
        </div>

        <!-- 2eme ligne -->
        <div class="w3-row-padding w3-center w3-margin-top">
            <div class="w3-third">
                <div class="w3-card-2 w3-padding-top" style="min-height:420px">
                    <h3>Lien utile</h3>
                    <i class="fa fa-share-alt-square w3-margin-bottom w3-text-blue" style="font-size:120px"></i><br/><br/>
                    <table class="w3-table">
                        <tr>
                            <td><button style="width:260px" class="w3-btn w3-blue" onclick="document.location.href='doc'">Documentation officielle</button></td>
                            <td><button style="width:260px" class="w3-btn w3-blue" onclick="document.location.href='http://simplework83.tumblr.com'">Blog</button></td>
                        </tr>
                        <tr>
                            <td><button style="width:260px" class="w3-btn w3-blue" onclick="document.location.href='https://github.com/Simple-Work/Security'">Projet Github</button></td>
                            <td><button style="width:260px" class="w3-btn w3-blue" onclick="document.location.href='http://a-toi-de-coder.forumactif.org/'">Forum partenaire</button></td>
                        </tr>
                        <tr>
                            <td><button style="width:260px" class="w3-btn w3-blue" onclick="">Nos autres projets</button></td>
                            <td><button style="width:260px" class="w3-btn w3-blue" onclick="">...</button></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="w3-third">
                <div class="w3-card-2 w3-padding-top" style="min-height:420px">
                    <h3>Télécharger</h3>
                    <i class="fa fa-download w3-margin-bottom w3-text-blue" style="font-size:120px"></i>
                    <form action="download/" method="get">
                    <table class="w3-table">
                        <tr>
                            <td><i class="fa fa-code fa-4x"></i></td>
                            <td><input class="w3-check" type="checkbox" name="PHP"><label> PHP</label></td>
                            <td><input class="w3-check" type="checkbox" name="JS"><label> JS</label></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-file-pdf-o fa-4x"></i></td>
                            <td><input class="w3-check" type="checkbox" name="DOCPHP"><label> Documentation PHP</label></td>
                            <td><input class="w3-check" type="checkbox" name="DOCJS"><label> Documentation JS</label></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input class="w3-btn w3-blue" type="submit" name="submit" value="Télécharger"></td>
                            <td><button class="w3-btn w3-blue" onclick="document.location.href='download'">Page de téléchargement</button></td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
            <div class="w3-third">
                <div class="w3-card-2 w3-padding-top" style="min-height:420px">
                    <h3>À propos</h3>
                    <i class="fa fa-commenting-o w3-margin-bottom w3-text-blue" style="font-size:120px"></i><br/><br/>
                    <button style="width:260px" class="w3-btn w3-blue" onclick="">Qui sommesnous ?</button><br/><br/>
                    <button style="width:260px" class="w3-btn w3-blue" onclick="document.location.href='http://www.simple-work.tk/index.php#projet'">Le projet Simple Work</button><br/><br/>
                    <button style="width:260px" class="w3-btn w3-blue" onclick="">Nos autres projets</button><br/><br/>
                </div>
            </div>
        </div><br/><br/>
    </body>
</html>