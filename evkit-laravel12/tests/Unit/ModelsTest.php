<?php

namespace Tests\Unit;

use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ModelsTest extends TestCase
{
    use RefreshDatabase;

    public function test_product_belongs_to_type(): void
    {
        $type = ProductType::factory()->create();
        $product = Product::factory()->create(['type_id' => $type->id]);

        $this->assertTrue($product->type->is($type));
        $this->assertCount(1, $type->products);
    }
}