<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ConfiguratorTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    public function test_configurator_page_loads(): void
    {
        $response = $this->get('/configurator');
        $response->assertOk();
        $response->assertSee('Конфигуратор');
    }

    public function test_order_creation(): void
    {
        $kit = Product::whereRelation('type', 'name', 'Kit')->first();
        $display = Product::whereRelation('type', 'name', 'Display')->first();
        $brakes = Product::whereRelation('type', 'name', 'Brakes')->first();
        $battery = Product::whereRelation('type', 'name', 'Battery')->first();

        $payload = [
            'name' => 'Тест',
            'email' => 'test@example.com',
            'mobile_number' => '+380123456789',
            'message' => 'Комментарий',
            'rim_size' => '26',
            'kit_id' => $kit->id,
            'display_id' => $display->id,
            'brakes_id' => $brakes->id,
            'battery_id' => $battery->id,
        ];

        $response = $this->post('/order/create', $payload);
        $response->assertRedirect('/order/confirm');
        $this->assertDatabaseHas('orders', ['email' => 'test@example.com']);
    }
}