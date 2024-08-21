<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'status', 'payment_method', 'payment_status', 'payment_id', 'address', 'city', 'state', 'phone_number', 'email', 'shipping_price', 'postal_code', 'country', 'total_price', 'created_at'];
    protected $table = 'orders';

    public function user(){
        return $this->belongsTo(User::class);
    }
}
