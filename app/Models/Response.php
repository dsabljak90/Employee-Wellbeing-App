<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Testing;
use App\Models\Question; 

class Response extends Model
{
    use HasFactory;

    public function question() 
    {
        return $this->belongsTo('App\Models\Question');
    }
    
    public function user() 
    {
        return $this->belongsTo('App\Models\User');
    }

    public function testing() 
    {
        return $this->belongsTo('App\Models\Testing');
    }

}