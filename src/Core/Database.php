<?php

namespace App\Core;

use PDO;

Class Database extends PDO {

    public function __construct()
    {
        $username = 'val';
        $password = 'formation';
        $host = 'localhost';
        $port = 3306;
        $dbname = 'php_poo';

        $dsn = "mysql:host=$host;port=$port;dbname=$dbname";

        // Options PDO (recommandées)
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Affiche les erreurs correctement
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // fetch() renvoie un tableau associatif
            PDO::ATTR_EMULATE_PREPARES => false, // plus sécurisé
        ];

        try {
            parent::__construct($dsn, $username, $password, $options);
        } catch (\PDOException $error){
            die('connection failed: ' . $error->getMessage());
        }
    }
}