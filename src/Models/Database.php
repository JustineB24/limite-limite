<?php

namespace App\Models;

use PDO;
use PDOException;

class Database
{
    public static PDO $db;

    public function __construct()
    {
        try {
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4',
            ];
            $dsn = 'mysql:host=mysql; dbname=limite_db; charset=utf8mb4';
            self::$db = new PDO($dsn, 'limite_user', 'limite_password', $options);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getQuestion(): string
    {
        try {
            $sql = "SELECT texte FROM questions ORDER BY RAND() LIMIT 1";
            $stmt = self::$db->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchColumn();

            return $result !== false ? (string) $result : '';
        } catch (PDOException $e) {
            return '[DATABASE ERREUR]' . $e->getMessage();
        }
    }

    public function getReponse(): string
    {
        try {
            $sql = "SELECT texte FROM reponses ORDER BY RAND() LIMIT 1";
            $stmt = self::$db->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchColumn();

            return $result !== false ? (string) $result : '';
        } catch (PDOException $e) {
            return '[DATABASE ERREUR]' . $e->getMessage();
        }
    }
}
