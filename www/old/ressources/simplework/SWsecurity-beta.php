<?php
/**
* Class SWsecurity
* contient les fonctions statiques de SW pour php
*/
class SWsecurity {


    public static function mysql ($bdd, $user, $mdp, $requete, $vars) {
        try {
            $conn = new PDO ('mysql:host=localhost;dbname='.$bdd.';charset=utf8;', $user, $mdp);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $req = $conn->prepare($requete);
            $i = 1;
            foreach ($variable as $value) {
                $req->bindParam($i, $value);
                $i++;
            }
            $req->execute();
            if(stripos($requete, "SELECT")){
                return $req->fetch();
            } else {
                return true;
            }
        }
        catch(PDOException $e) {
            throw new SWerror("SW::mysql have discover an error with this message : " . $e->getMessage(), 1);
        }
    }

    public static function onlyint ($var) {
        $y = str_split($string);
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
        return $z;
    }

    public static function onlytext ($var) {
        $var = htmlentities($var);
        $var = str_ireplace("[", "&#91;", $var);
        $var = str_ireplace("]", "&#93;", $var);
        return $var;
    }

    public static function onlybbcode($var) {
        $var = htmlentities($var);
        return $var;
    }

    public static function nocode ($var) {
        $search = array("<script", "</script>", "<?php", "?>", "<?=", "include", "require", "<!--", "-->", "//", "/*", "*/", "/**", "#", "<style", "</style>", "<iframe", "</iframe>");
        $var = str_replace($search, "", $var);
        return $var;
    }
}



/**
* Class SWerror
* class pour les erreurs SW
*/
class SWerror extends Exception{

    /**
    * @param string $message le message de l'erreur
    * @param int $code code de l'erreur
    * @param Exception $previous Laisser vide, ne pas spécifier
    */
    public function __construct($message = "erreur non enregistré", $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }

}
// use :    throw new SWerror("message",code);
// for debug an SW error, go here : http://www.simple-work.tk/doc/error and enter your code error
?>