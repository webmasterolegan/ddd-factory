<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateNewBidTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Тестирование API создания новой заявки
     */
    public function test_api_create_bid(): void
    {
        $response = $this->post('/api/bid', [
            'name' => 'Иван',
            'telephone' => '80000000000',
            'text' => 'Тестовый текст заявки',
        ]);

        $response->assertStatus(200);
    }
}
