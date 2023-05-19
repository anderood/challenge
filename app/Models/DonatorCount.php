<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonatorCount extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'debit_count',
        'credit_count',
    ];
    public static function create(array $attributes = [])
    {
        return static::query()->create($attributes);
    }
}
