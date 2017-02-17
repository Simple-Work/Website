<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Nous contactez - simple-work.tk</title>
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
        <div class="w3-teal" style="padding-top: 15px;padding-left: 15px;"><a href="http://www.simple-work.tk"><i class="fa fa-arrow-left fa-3x"></i></a></div>
        <div class="w3-container w3-teal w3-center w3-padding-64">
            <h1 class="w3-margin w3-jumbo"><i class="fa fa-envelope-o"></i> Nous contacter</h1>
        </div>


        <!-- message d'info -->
        <div class="w3-container w3-teal w3-center w3-padding-32">
            <h2 class="w3-margin w3-xxlarge">Vous pouvez nous contacter par mail à : <a href="mailto:contact@simple-work.tk"><i class="fa fa-envelope-o"></i> contact@simple-work.tk</a></h2>
                        <h2 class="w3-margin w3-xxlarge">ou utiliser le formulaire ci-dessous <i class="fa fa-arrow-down"></i></h2>
        </div>
        <br/>

        <!-- formulaire -->
        <div class="w3-row-padding w3-margin-top w3-margin-bottom">
        <div class="w3-quarter"> &nbsp; </div>
        <div class="w3-half">
        <div class="w3-container w3-teal">
            <h2>Formulaire de contact</h2>
        </div>
        <form class="w3-container w3-card-4" action="" method="post">
            <br>
            <p>      
                <label class="w3-text-grey">Prénom</label>
                <input id="name" class="w3-input" type="text" required>
            </p>
            <p>      
                <label class="w3-text-grey">Email</label>
                <input id="mail" class="w3-input" type="text" required>
            </p>
            <p>      
                <label class="w3-text-grey">Sujet</label>
                <input id="sujet" class="w3-input" type="text" required>
            </p>
            <p>
                <label class="w3-text-grey">Catégorie</label>
                <select id="categorie" class="w3-select" name="option">
                    <option value="none" disabled selected>Choisiser une catégorie</option>
                    <option value="error">Erreur</option>
                    <option value="bug">Bug</option>
                    <option value="comment">Commentaire</option>
                    <option value="partenariat">Partenariat</option>
                    <option value="others">Autres</option>
                </select>
            </p>
            <br>
            <p>
                <label class="w3-text-grey">Message</label>
                <textarea id="message" class="w3-input" required></textarea>
            </p>
            <br>
            <p><button type="button" class="w3-btn w3-padding w3-teal" style="width:120px" onclick="sendMSG()">Envoyer &nbsp; ❯</button></p>
        </form>
        <br/>
        <div id="statediv" class="w3-amber"><p id="state" class="w3-large w3-center w3-container w3-padding-12">Prêt à envoyer</p></div>
        </div>
        <div class="w3-quarter"> &nbsp; </div>
        </div>
        <script>
        //script d'envoi du message
        function sendMSG() {
            var xhr = null;
            if (window.XMLHttpRequest || window.ActiveXObject) {
                if (window.ActiveXObject) {
                    try {
                        xhr = new ActiveXObject("Msxml2.XMLHTTP");
                    } catch(e) {
                        xhr = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                } else {
                    xhr = new XMLHttpRequest(); 
                }
            } else {
                alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
                return;
            }
            //objet XHR créer

            var inputs = [encodeURIComponent(document.getElementById("name").value), encodeURIComponent(document.getElementById("mail").value), encodeURIComponent(document.getElementById("sujet").value), encodeURIComponent(document.getElementById("categorie").value), encodeURIComponent(document.getElementById("message").value)];

            xhr.onreadystatechange = function() {
                if(xhr.readyState == 0) {
                    document.getElementById("state").innerHTML = "message en cours de préparation <i class='fa fa-spinner fa-pulse'></i>";
                } else if(xhr.readyState == 2) {
                    document.getElementById("state").innerHTML = "message en cours d'envoi <i class='fa fa-spinner fa-pulse'></i>";
                } else if(xhr.readyState == 4) {
                    if(xhr.status == 200 || xhr.status == 0) {
                        document.getElementById("state").innerHTML = "message envoié avec succès";
                        document.getElementById("statediv").className = "w3-green";
                    } else {
                        document.getElementById("state").innerHTML = "erreur inconnu";
                        document.getElementById("statediv").className = "w3-red";
                    }
                }
            };

            xhr.open("GET", "http://panel.simple-work.tk/newmsg.php?name=" + inputs[0] + "&mail=" + inputs[1] + "&sujet=" + inputs[2] + "&categorie=" + inputs[3] + "&message=" + inputs[4], true);
            xhr.send(null);

        }
        </script>
    </body>
</html>