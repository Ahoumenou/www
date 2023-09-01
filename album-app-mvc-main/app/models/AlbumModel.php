<?php

class AlbumModel
{
    private static function getConnexion()
    {
        global $db_host, $db_port, $db_name, $db_username, $db_password;
        try {
            // paramètres de connexion
            $options = [
                    // Nous avertir de toutes les erreurs de connexion
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    // renvoyer les données sous forme de tableau associatif
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ];
            $dsn = "mysql:host=$db_host;dbname=$db_name;port=$db_port;charset=utf8mb4";
            $pdo = new PDO($dsn, $db_username, $db_password, $options);
            return $pdo;
        } catch (\PDOException $e) {
            echo "Erreur: " . $e->getMessage();
            return null;
        }
    }
    // Methode pour creer les albums (Create)
    public static function addAlbum(string $title, string $artiste)
    {
        // recuperer l'objet de connexion à la BDD
        $pdo = self::getConnexion();
        if ($pdo !== null) {
            try {

            } catch (\PDOException $e) {
                echo "Erreur: " . $e->getMessage();
                return [];
            }
           
        }

    }
    // Methode pour recuperer tous les albums (Read) 
    public static function getAlbums()
    {
        // echo "dsqgdfhgfdh";
        // exit();
        // recuperer l'objet de connexion à la BDD
        $pdo = self::getConnexion();
        if ($pdo !== null) {
            try {
                $sql = "SELECT * FROM albums;";
                // prepare statement(fr: requête préparé)
                $stmt = $pdo->prepare($sql);
                $stmt->execute(); // exécuter la requête 
                $albums = $stmt->fetchAll(); // renvoyer les resultats trouvés 
                return $albums;
                
                // $results = $pdo->query($sql)->felchAll; // préparer sans paramètres, exécuter puis
                //renvoyer les résultats (avec felchAll)
                
                // foreach ($ $albums as $alb) {
                //     echo "<pre>";
                //     print_r($alb);
                //     echo "</pre>";

                // }

            } catch (\PDOException $e) {
                echo "Erreur: " . $e->getMessage();
                return [];
            }
           
        }
    }

    // Meeode pour recuperer un album spécifique (Read) 
    public static function getAlbumById(int $Id)
    {
        // recuperer l'objet de connexion à la BDD
        $pdo = self::getConnexion();
        if ($pdo !== null) {
            try {
                $sql = "SELECT * FROM albums WHERE id = $Id;";
                // prepare statement(fr: requête préparé)
                $stmt = $pdo->prepare($sql);
                $stmt->execute();

            } catch (\PDOException $e) {
                echo "Erreur: " . $e->getMessage();
                return [];
            }
            
        }
    }

    // Meeode pour mettre-à-jour une albums (Update)
    public static function updateAlbum(int $id, string $title, string $artiste)
    {
        // recuperer l'objet de connexion à la BDD
        $pdo = self::getConnexion();
        if ($pdo !== null) {
            try {
                $sql = "UPDATE `albums` SET `title` = $title, `artiste` = $artiste WHERE `albums`.`id` = $id";
                // prepare statement(fr: requête préparé)
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
            } catch (\PDOException $e) {
                echo "Erreur: " . $e->getMessage();
                return [];
            }
           
        }
    }

    // Meeode pour supprimer les albums (Delete)
    public static function deleteAlbum(int $id)
    {
        // recuperer l'objet de connexion à la BDD
        $pdo = self::getConnexion();
        if ($pdo !== null) {
            try {
                $sql = "DELETE FROM albums WHERE `albums`.`id` = $id";
                // prepare statement(fr: requête préparé)
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
            } catch (\PDOException $e) {
                echo "Erreur: " . $e->getMessage();
                return [];
            }
           
        }
    }
}