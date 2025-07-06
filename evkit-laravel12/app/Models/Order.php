<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'kit_id',
        'display_id',
        'brakes_id',
        'battery_id',
        'rim_size',
        'mobile_number',
        'name',
        'email',
        'message',
        'order_status',
    ];

    public $timestamps = false; // original migration didn't include timestamps

    /*
     * Relationships to products that make up the order
     */
    public function kit()
    {
        return $this->belongsTo(Product::class, 'kit_id');
    }

    public function display()
    {
        return $this->belongsTo(Product::class, 'display_id');
    }

    public function brakes()
    {
        return $this->belongsTo(Product::class, 'brakes_id');
    }

    public function battery()
    {
        return $this->belongsTo(Product::class, 'battery_id');
    }
}