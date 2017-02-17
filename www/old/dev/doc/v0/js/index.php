<?php
if(isset($_GET['doc'])){
    $search = array(
        ".",
        "..",
        "/",
        "\\"
        );
    $GETfile = "file/".str_ireplace($search, "", $_GET['doc']);
    if(is_file($GETfile.".html") && is_file($GETfile.".txt")){
        $FILENAME = $GETfile;
    }
    else {
        $FILENAME = "file/about";
    }
}
else {
    $FILENAME = "file/about";
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Développeur - Documentation JS - simple-work.tk</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="The official website of SimpleWork project">
        <meta name="keywords" content="SimpleWork,Simple,Work,PHP,JS,web,editor,editeur,site,official,officiel,fr,gb,en,français,francais,english">
        <meta name="author" content="Louis Maillard">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.min.css">
        <style>
        code{background-color: #f0f0f0; color: black;}
        pre code{display: block; padding: 10px;}
        </style>
    </head>
    <body>

        <!-- Header -->
        <div class="w3-blue" style="padding-top: 15px;padding-left: 15px;"><a href="http://www.simple-work.tk/dev/doc"><i class="fa fa-arrow-left fa-3x"></i></a></div>
        <div class="w3-container w3-blue w3-center w3-padding-64">
            <h1 class="w3-margin w3-jumbo"><i class="fa fa-file-text"></i> Documentation JS</h1>
        </div>


        <!-- 1er ligne -->
        <div class="w3-row-padding w3-center w3-margin-top">
            <div class="w3-quarter">
                <div id="left-div" class="w3-card-2 w3-padding-top w3-light-grey" style="min-height:1000px">
                    <h2 style="text-align: left;"> &nbsp; SWsecurity</h2>
                    <ul class="fa-ul w3-large" style="text-align: left;">
                        <li><i class="fa fa-li fa-folder-open-o"></i> {{folder name}}
                            <ul class="fa-ul">
                                <li><i class="fa fa-li fa-file-text-o"></i> {{item name}}</li>
                                <li><i class="fa fa-li fa-file-text-o"></i> {{item name}}</li>
                                <li><i class="fa fa-li fa-file-text-o"></i> {{item name}}</li>
                            </ul>
                        </li>
                        <li><i class="fa fa-li fa-folder-o"></i> {{folder name}}</li>
                        <li><i class="fa fa-li fa-folder-o"></i> {{folder name}}</li>
                        <li><i class="fa fa-li fa-folder-o"></i> {{folder name}}</li>
                        <li><i class="fa fa-li fa-folder-o"></i> {{folder name}}</li>
                    </ul>
                </div>
            </div>
            <div class="w3-half">
                <div id="doc-div" class="w3-card-2 w3-padding-top w3-padding-bottom" style="min-height:1000px; text-align: left; padding: 0 10px;">
                    <?php
                    $doc = fopen($FILENAME.".html", "r");
                    while(!feof($doc)) {
                        echo fgets($doc);
                    }
                    fclose($doc);
                    ?>
                    <br/><br/>
                </div><br/>
            </div>
            <?php
            $infofile = fopen($FILENAME.".txt", "r");
            for ($i=0; !feof($infofile); $i++) { 
                $info[$i] = fgets($infofile);
            }
            fclose($infofile);
            ?>
            <div class="w3-quarter">
                <div id="right-div" class="w3-card-2 w3-padding-top w3-dark-grey w3-xlarge" style="min-height:1000px">
                    <h2 class="w3-xxxlarge w3-center"><?= $info[0] ?></h2>
                    <p style="text-align: left; padding: 0 10px;">Apparu le : <?= $info[1] ?> <br/>
                    dans la version : <code><?= $info[2] ?></code> </p>
                    <?php
                        if(strpos($info[3],'test') !== false) {
                            echo "<div style='margin: 0 10px;' class='w3-container w3-orange'><h3>Ce code est actuellement en test</h3><p class='w3-large'>".$info[4]."</p></div>";
                        }
                        elseif(strpos($info[3],'ok') !== false) {
                            echo "<div style='margin: 0 10px;' class='w3-container w3-green'><h3>Ce code fonctionne parfaitement</h3><p class='w3-large'>".$info[4]."</p></div>";
                        }
                        elseif(strpos($info[3],'abandon') !== false) {
                            echo "<div style='margin: 0 10px;' class='w3-container w3-orange'><h3>Ce code est à l'abandon</h3><p class='w3-large'>".$info[4]."</p></div>";
                        }
                        elseif(strpos($info[3],'replaced') !== false) {
                            echo "<div style='margin: 0 10px;' class='w3-container w3-orange'><h3>Ce code à était remplacé</h3><p class='w3-large'>".$info[4]."</p></div>";
                        }
                        elseif(strpos($info[3],'deleted') !== false) {
                            echo "<div style='margin: 0 10px;' class='w3-container w3-red'><h3>Ce code est supprimé</h3><p class='w3-large'>".$info[4]."</p></div>";
                        }
                        else {
                            echo "<div style='margin: 0 10px;' class='w3-container w3-blue'><h3>Ce code n'a pas de status particulier</h3><p class='w3-large'>".$info[4]."</p></div>";
                        }

                        $errors = explode(",", $info[5]);

                        if($errors[0] !== "") {
                            echo "<br/><span class='w3-xxlarge'>Erreurs :</span><br/>";
                            echo "<ul style='text-align:left;list-style-type:none;'>";
                            foreach ($errors as $error) {
                                $item = explode(":", $error);
                                echo "<li><a href='http://www.simple-work.tk/dev/doc/error/?code=".$item[0]."'><span class='w3-tag w3-red'>".$item[0]."</span> ".$item[1]."</a></li><br/>";
                            }
                            echo "</ul>";
                        }
                    ?>
                </div>
            </div>
        </div>
        <script>
        var element = document.getElementById('doc-div'),
        style = window.getComputedStyle(element),
        height = style.getPropertyValue('height');

        document.getElementById('left-div').setAttribute("style", "height: " + height + ";");
        document.getElementById('right-div').setAttribute("style", "height: " + height + ";");
        </script>
    </body>
</html>