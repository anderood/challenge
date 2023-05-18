<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donator extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'donation_range',
        'payment_method',
        'value',
    ];
}
