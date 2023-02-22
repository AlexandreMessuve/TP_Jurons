<?php


class DBLogin
{
    //Method static qui permet de créer une instance de DBManager
    static function PDO(): PDO
    {
        return new PDO('mysql:host=localhost;dbname=boite_a_jurons', 'root', '');
    }

    static function authentification(array $data) : bool  {
        $statut = false; 
        $connect = self::PDO ();
        if (isset($data["login"])) {
            if (empty($data["login"]) || empty($data["password"])) {
                $statut = false;
            } else {
                $query = "SELECT * FROM utilisateur WHERE login_utilisateur = :login AND password = :password";
                $statement = $connect->prepare($query);
                $statut = $statement->execute(
                    array(
                        'login' => $data["login"],
                        'password' => $data["password"]
                    )
                    
                    );
            }
        }
        return $statut;
    }






}


?>