<?php


class DBLogin
{
    //Method static qui permet de créer une instance de DBManager
    static function PDO(): PDO
    {
        return new PDO('mysql:host=localhost;dbname=boite_a_jurons', 'root', '');
    }

    static function authentification(string $login, string $password): bool{
        $connect = self::PDO ();
        $query = "SELECT * FROM `utilisateur` WHERE login_utilisateur='$login'";
        $stmt = $connect->prepare($query);
        $stmt->execute();
        $users = $stmt->fetch(PDO::FETCH_OBJ);
        return password_verify($password, $users->password);

    }

}