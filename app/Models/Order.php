<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    

}
