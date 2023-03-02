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
    
        static function deletePenalite($id): bool
        {

            $pdo = self::PDO();
            $sql = "DELETE FROM `commettre` WHERE id_commettre =?";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(1, $id);
            return  $stmt->execute();
        }

        static function selectAllPenalitys(): array
        {
            $pdo = self::PDO();
            $sql = "SELECT * FROM commettre";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        static function selectBalance(): array
        {
            $pdo = self::PDO();
            $sql = "SELECT login_balance FROM commettre";
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

    static function selectCountByCodeInfraction(string $codeInfraction): array
    {
        $pdo = self::PDO();
        $sql = "SELECT nom,prenom,COUNT(code_infraction) AS countInfra, c.login_utilisateur FROM commettre AS c, utilisateur
        AS u WHERE u.login_utilisateur = c.login_utilisateur AND code_infraction = ?  
        AND DATEDIFF(CURRENT_TIMESTAMP,date_infraction) <= 7 GROUP BY login_utilisateur ORDER BY prenom;";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(1, $codeInfraction);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    static function selectCountTotal(){
        $pdo = self::PDO();
        $sql = "SELECT nom,prenom,COUNT(code_infraction) AS total, c.login_utilisateur FROM commettre AS c, utilisateur
        AS u WHERE u.login_utilisateur = c.login_utilisateur  AND DATEDIFF(CURRENT_TIMESTAMP,date_infraction) <= 7 
        GROUP BY login_utilisateur ORDER BY prenom;";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

}