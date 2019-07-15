<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restriction extends Model
{
    protected $fillable = ['name', 'cpf', 'description'];


    public function people() {
        return $this->belongsTo(Person::class);
    }
}
