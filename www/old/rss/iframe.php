<?php
if(isset($_GET['limit'])){
	$y = str_split($_GET['limit']);
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
    if($z == false){$z = 5;}
	$limit = $z;
} else {
	$limit = 5;
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    </head>
    <body>
        <div class="w3-center">
            <?php
            $texte = fread($file = fopen("rss.xml", "r"), filesize("rss.xml")); fclose($file);
            $texte = str_replace("\n", "", $texte);
            $texte = preg_replace("/<\?xml(?:.*)<\/language>/i", "", $texte);
            $texte = preg_replace("/<\/channel>(?:.*)<\/rss>/i", "", $texte);

            $final = preg_replace("/<item>(?:.*?)<title>(.*?)<\/title>(?:.*?)<link>(.*?)<\/link>(?:.*?)<description>(.*?)<\/description>(?:.*?)<\/item>/i", "<div><h3>$1</h3><br/><p>$3</p><a href='$2'>voir le lien</a></div><br/><hr/><br/>", $texte, $limit);
            $final = preg_replace("/<item>(?:.*)<\/item>/i", "", $final);

            echo $final;
            ?>
        </div>
    </body>
</html>