<?php

namespace App\Controllers;

use App\Models\Database;

class LimiteLimite
{
    public function getLimiteLimite(): string
    {
        $database = new Database();
        $debut = $database->getQuestion();
        $fin = $database->getReponse();
        $phrase = $debut . " " . $fin;
        return $phrase;
    }

    public function __construct() {}
}
