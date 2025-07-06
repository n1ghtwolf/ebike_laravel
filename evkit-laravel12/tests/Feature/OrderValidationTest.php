<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OrderValidationTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    public function test_order_requires_valid_product_ids(): void
    {
        $payload = [
            'name' => 'Bad',
            'email' => 'bad@example.com',
            'mobile_number' => '+380123456789',
            'message' => 'msg',
            'rim_size' => '26',
            'kit_id' => 9999, // invalid
            'display_id' => 9999,
            'brakes_id' => 9999,
            'battery_id' => 9999,
        ];

        $response = $this->post('/order/create', $payload);
        $response->assertSessionHasErrors(['kit_id', 'display_id', 'brakes_id', 'battery_id']);
    }
}