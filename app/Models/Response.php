<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponseModel extends Model
{
    use HasFactory;
    public function recommendation_for_employees(){
    return $this->belongsTo('App\Models\RecommendationForEmployees');
}
    public function recommendation_for_managers() {
        return $this->belongsTo('App\Models\RecommendationForManagers');
    }
    public function questionaire() {
        return $this->belongsTo('App\Models\Questionaire');
    }
}