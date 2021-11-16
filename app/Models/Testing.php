<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Response;
class Testing extends Model
{
    use HasFactory;

    public function users() 
    {
        return $this->belongsToMany('App\Models\User', 'responses');
    }

    public function responses()
    {
        return $this->hasMany('App\Models\Response');
    }
    
}