<?php
include_once '../Utilisateur.class.php';
class  DBManager
{
    static function PDO(): PDO
    {
        return new PDO('mysql:host=localhost;dbname=boite_a_jurons', 'root', '');
    }

    static function insertUtilisateur(Utilisateur $utilasateur): bool
    {
        $pdo = self::PDO();
        $sql = "INSERT INTO `utilisateur` (`nom`, `prenom`, `date_de_naissance`, `login`, `password`, `id_role`) 
                VALUES (?,?,?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(1, $utilasateur->nom);
        $stmt->bindParam(2, $utilasateur->prenom);
        $stmt->bindParam(3, $utilasateur->date_de_naissance);
        $stmt->bindParam(4, $utilasateur->login);
        $stmt->bindParam(5, $utilasateur->password);
        $stmt->bindParam(6, $utilasateur->id_role);
        return $stmt->execute();
    }
    static function updateUtilisateur(Utilisateur $utilisateur): bool
    {
        $pdo = self::PDO();
        $sql = "UPDATE `utilisateur` SET `nom` =?, `prenom` =?, `date_de_naissance` =?,
                         `login` =?, `password` =?, `id_role` =? WHERE login =?";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(1, $utilisateur->nom);
        $stmt->bindParam(2, $utilisateur->prenom);
        $stmt->bindParam(3, $utilisateur->date_de_naissance);
        $stmt->bindParam(4, $utilisateur->login);
        $stmt->bindParam(5, $utilisateur->password);
        $stmt->bindParam(6, $utilisateur->id_role);
        return  $stmt->execute();
    }
    static function selectUtilisateur(): object
    {
        $pdo = self::PDO();
        $sql = "SELECT * FROM utilisateur";
        $stmt = $pdo->query($sql);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}

