<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_id',
        'name',
        'description',
        'img',
        'price',
        'currency',
        'priority',
        'available',
    ];

    /**
     * Product belongs to a type.
     */
    public function type()
    {
        return $this->belongsTo(ProductType::class, 'type_id');
    }
}