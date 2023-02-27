<?php
//Creation de dbmanager
class  DButilisateurManager
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
        $email = $utilisateur->getEmail();
        $id_role = $utilisateur->getRoles()->getIdRole();
        $pdo = self::PDO();
        $sql = "INSERT INTO `utilisateur` (`nom`, `prenom`, `date_naissance`, `login_utilisateur`,`email` , `password`, `id_roles`) 
                VALUES (?,?,?,?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(1, $nom);
        $stmt->bindParam(2, $prenom);
        $stmt->bindParam(3, $date);
        $stmt->bindParam(4, $login);
        $stmt->bindParam(5, $email);
        $stmt->bindParam(6, $password);
        $stmt->bindParam(7, $id_role);
        return $stmt->execute();
    }

    //Method static qui permet de mettre a jour l'utilisateur
    static function updateUtilisateur(Utilisateur $utilisateur): bool
    {
        $nom = $utilisateur->getNom();
        $prenom = $utilisateur->getPrenom();
        $date = $utilisateur->getDate();
        $login = $utilisateur->getLogin();
        $email = $utilisateur->getEmail();
        $password = $utilisateur->getPassword();
        $id_role = $utilisateur->getRoles()->getIdRole();
        $pdo = self::PDO();
        $sql = "UPDATE `utilisateur` SET `nom` =?, `prenom` =?, `date_de_naissance` =?,
                         `password` =?, `email`, `id_role` =? WHERE login_utilisateur =?";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(1, $nom);
        $stmt->bindParam(2, $prenom);
        $stmt->bindParam(3, $date);
        $stmt->bindParam(4, $password);
        $stmt->bindParam(5, $email);
        $stmt->bindParam(6, $id_role);
        $stmt->bindParam(7, $login);
        return  $stmt->execute();
    }

    static function deleteUtilisateur(Utilisateur $utilisateur): bool
    {

        $login = $utilisateur->getLogin();
        $pdo = self::PDO();
        $sql = "DELETE FROM `utilisateur` WHERE login_utilisateur =?";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(1, $login);
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

     //Method static qui permet de select l'utilisateur a partir de la bdd
    static function selectUtilisateurByLogin(string $login): object
    {
        $pdo = self::PDO();
        $sql = "SELECT * FROM utilisateur where login_utilisateur=?";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(1, $login);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
        }

        static function selectUtilisateurByNom(): object
        {
            $pdo = self::PDO();
            $sql = "SELECT nom, prenom, date_naissance FROM utilisateur"  ;
            $stmt = $pdo->query($sql);
            return $stmt->fetch(PDO::FETCH_OBJ);
        }

        static function selectUtilisateurByLoginEmail(): object{
            $pdo = self::PDO();
            $sql = "SELECT email, login_utilisateur FROM utilisateur";
            $stmt = $pdo->query($sql);
            return $stmt->fetch(PDO::FETCH_OBJ);
        }

        
    




}

