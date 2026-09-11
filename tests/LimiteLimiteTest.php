<?php

namespace Tests;

use App\Controllers\LimiteLimite;
use App\Models\Database;
use PHPUnit\Framework\TestCase;

class LimiteLimiteTest extends TestCase
{
    public function testLimiteLimiteStructure(): void
    {
        $database = $this->createMock(Database::class);
        $database->method('getQuestion')->willReturn('Question test');
        $database->method('getReponse')->willReturn('Réponse test');

        $controller = new LimiteLimite($database);
        $result = $controller->getLimiteLimite();

        $this->assertIsArray($result);
        $this->assertArrayHasKey('question', $result);
        $this->assertArrayHasKey('reponse', $result);
        $this->assertEquals('Question test', $result['question']);
        $this->assertEquals('Réponse test', $result['reponse']);
    }
}
