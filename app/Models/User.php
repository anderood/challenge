<?php

namespace App\Models;

use App\Models\Donator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

   public function userHistories(): HasMany
   {
       return $this->hasMany(Comment::class)->orderBy('created_at', 'desc');
   }
    public function insertUserHistory() : History
    {
        return History::firstOrCreate([
            'name'=>'Anderson',
            'description'=>'Doação Realizada',
            'value' => "100",
            'user_id'=> $this->id,
        ]);
    }
}
