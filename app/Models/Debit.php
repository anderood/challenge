<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debit extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'bank',
        'agency',
        'account',
        'digit',
        'created_at',
        'updated_at'
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
