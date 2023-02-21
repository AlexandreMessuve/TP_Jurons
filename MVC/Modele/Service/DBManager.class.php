<?php
//Creation de dbmanager
class  DBManager
{
    //Method static qui permet de créer une instance de DBManager
    static function PDO(): PDO
    {
        return new PDO('mysql:host=localhost;dbname=boite_a_jurons', 'root', '');
    }

    //Method static qui permet d'inserer un utilisateur dans la bdd
    static function insertUtilisateur(Utilisateur $utilisateur): bool
    {
        $nom = $utilisateur->getNom();
        $prenom = $utilisateur->getPrenom();
        $date = $utilisateur->getDate();
        $login = $utilisateur->getLogin();
        $password = $utilisateur->getPassword();
        $id_role = $utilisateur->getRoles()->getIdRole();
        $pdo = self::PDO();
        $sql = "INSERT INTO `utilisateur` (`nom`, `prenom`, `date_de_naissance`, `login`, `password`, `id_role`) 
                VALUES (?,?,?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(1, $nom);
        $stmt->bindParam(2, $prenom);
        $stmt->bindParam(3, $date);
        $stmt->bindParam(4, $login);
        $stmt->bindParam(5, $password);
        $stmt->bindParam(6, $id_role);
        return $stmt->execute();
    }

    //Method static qui permet de mettre a jour l'utilisateur
    static function updateUtilisateur(Utilisateur $utilisateur): bool
    {
        $pdo = self::PDO();
        $sql = "UPDATE `utilisateur` SET `nom` =?, `prenom` =?, `date_de_naissance` =?,
                         `login` =?, `password` =?, `id_role` =? WHERE login =?";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(1, $utilisateur->getNom());
        $stmt->bindParam(2, $utilisateur->getPrenom());
        $stmt->bindParam(3, $utilisateur->getDate());
        $stmt->bindParam(4, $utilisateur->getLogin());
        $stmt->bindParam(5, $utilisateur->getPassword());
        $stmt->bindParam(6, $utilisateur->getRoles()->getIdRole());
        return  $stmt->execute();
    }

    //Method static qui permet de select l'utilisateur a partir de la bdd
    static function selectUtilisateur(): array
    {
        $pdo = self::PDO();
        $sql = "SELECT * FROM utilisateur";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    //Method static qui permet de selectionné un role dans la bdd
    static function selectRole(): array{
        $pdo = self::PDO();
        $sql = "SELECT * FROM `role`";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }

    //Method static qui permet de selectionné les jurons
    static function selectJurons($categorie): object{
        $pdo = self::PDO();
        $sql = "SELECT * FROM `jurons` where categorie =".$categorie;
        $stmt = $pdo->query($sql);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    //metho d'insertion des balances
    static function insertBalance(Balance $balance): bool{
        $id_jurons = $balance->getIdJurons();
        $login = $balance->getLoginUtilisateur();
        $date = $balance->getDate();
        $pdo = self::PDO();
        $sql = "INSERT INTO `balance` (`id_jurons`, `login`, `date`) VALUES (?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(1, $id_jurons);
        $stmt->bindParam(2, $login);
        $stmt->bindParam(3, $date);
        return $stmt->execute();
    }
}

