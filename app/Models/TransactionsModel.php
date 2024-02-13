<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionsModel extends Model
{
    use HasFactory;
    protected $table = 'transactions';
    protected $fillables = [
        'id',
        'customer_id',
        'type',
        'amount',
        'currency',
        'transaction_id',
        'reference',
        'status',
        'description',
        'remark',
        'created_at',
        'updated_at'

    ];

}
