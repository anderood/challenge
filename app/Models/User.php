<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'cpf',
        'phone',
        'date_of_birth',
        'created_at',
        'updated_at',
    ];

    public function address()
    {
        return $this->hasOne('App\Models\Address');
    }

    public function credit()
    {
        return $this->hasOne('App\Models\CreditPayments');
    }

    public function debit()
    {
        return $this->hasOne('App\Models\DebitPayments');
    }
}
