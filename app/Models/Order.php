<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_no',
        'stock_code',
        'description',
        'quantity',
        'invoice_date',
        'unit_price',
        'customer_id',
        'country'
    ];
}
