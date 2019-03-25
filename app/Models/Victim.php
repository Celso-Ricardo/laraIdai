<?php

namespace App\Models;

use Models\Condition;
use Illuminate\Database\Eloquent\Model;

class Victim extends Model
{
    protected $fillable = ['id','name','neighborhood_id', 'age', 'gender_id', 'condition_id', 'photo_url','condition_description','created_at','updated_at'];


    public function condition(){
    	return $this->belongsTo(Condition::class);
    }


}
