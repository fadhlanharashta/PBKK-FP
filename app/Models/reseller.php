<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reseller extends Model
{
    use HasFactory;
    protected $fillable = [
        'resellerName',
        'resellerAddress',
        'stock'
    ];
}
