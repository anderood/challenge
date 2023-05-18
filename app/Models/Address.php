<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'zipcode',
        'street',
        'number',
        'complement',
        'district',
        'city',
        'state',
        'created_at',
        'updated_at',
    ]; 

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
