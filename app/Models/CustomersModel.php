<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomersModel extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $fillables = [
        'id',
        'name',
        'email',
        'phone',
        'password',
        'pin',
        'token',
        'created_at',
        'updated_at'
    ];

}
