<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinishOrder extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'cart_items',
        'total',
        'table_number',
        'dinein',
        'takeaway',
        'comment',
        'status',
        'product_id',

    ];
}
