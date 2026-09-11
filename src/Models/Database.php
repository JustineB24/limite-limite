<?php
namespace App\Models;

use PDO;
use PDOException;

class Database {
    public static PDO $db;

    public function __construct() {
        try {
            $options = [PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION];
            $dsn = 'mysql:host=mysql; dbname=limite_db; charset=utf8';
            self::$db = new PDO($dsn, 'limite_user', 'limite_password', $options);

        } 
        catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getQuestion(): string {
        try {
            $sql = "SELECT texte FROM questions ORDER BY RAND() LIMIT 1";
            $stmt = self::$db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchColumn();
        } catch(PDOException $e) {
            return '[DATABASE ERREUR]' . $e->getMessage();
        }
    }

    public function getReponse(): string {
        try {
            $sql = "SELECT texte FROM reponses ORDER BY RAND() LIMIT 1";
            $stmt = self::$db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchColumn();
        } catch(PDOException $e) {
            return '[DATABASE ERREUR]' . $e->getMessage();
        }
    }
}

?>