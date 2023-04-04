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
        'order_status'
    ];
}
