<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testing extends Model
{
    use HasFactory;
    public function questionaire() {
        return $this->hasMany('App\Models\Questionaire');
    }
    public function user() {
        return $this->hasMany('App\Models\User');
    }
    
}