<?php

namespace App\Controllers;

use App\Models\Database;

class LimiteLimite
{
    private Database $database;

    public function __construct(?Database $database = null)
    {
        $this->database = $database ?? new Database();
    }

    public function getLimiteLimite(): array
    {
        return [
            'question' => $this->database->getQuestion(),
            'reponse' => $this->database->getReponse(),
        ];
    }
}
