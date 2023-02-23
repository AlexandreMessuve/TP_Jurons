<?php

class DBCommettreManager {
    //Method static qui permet de créer une instance de DBManager
    static function PDO(): PDO
    {
        return new PDO('mysql:host=localhost;dbname=boite_a_jurons', 'root', '');
    }

        //Method static qui permet d'inserer une infraction dans la bdd
        static function insertPenalite(Commettre $commettre): bool
        {
            $codeInfraction = $commettre->getCodeInfraction();
            $loginUtilisateur = $commettre->getLoginUtilisateur();
            $loginBalance = $commettre->getLoginBalance();
            $pdo = self::PDO();
            $sql = "INSERT INTO commettre (`code_infraction`, `login_utilisateur`, `login_balance`) 
                    VALUES (?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(1, $codeInfraction);
            $stmt->bindParam(2, $loginUtilisateur);
            $stmt->bindParam(3, $loginBalance);
            return $stmt->execute();
        }
    
        static function deletePenalite(Commettre $commettre): bool
        {
    
            $codeInfraction = $commettre->getCodeInfraction();
            $pdo = self::PDO();
            $sql = "DELETE FROM `utilisateur` WHERE code_infraction = $codeInfraction";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(1, $login);
            return  $stmt->execute();
        }

        static function selectAllPenalitys(): array
        {
            $pdo = self::PDO();
            $sql = "SELECT * FROM commettre";
            $stmt = $pdo->query($sql);
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        static function selectBalance(): array
        {
            $pdo = self::PDO();
            $sql = "SELECT login_balance, login_utilisateur FROM commettre";
            $stmt = $pdo->query($sql);
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        
        static function selectBestBalance(): array 
        {
            $pdo = self::PDO();
            $sql = "SELECT COUNT(*), login_balance FROM commettre GROUP BY login_balance";
            $stmt = $pdo->query($sql);
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
}