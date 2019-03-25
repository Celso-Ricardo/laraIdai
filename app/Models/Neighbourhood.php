<?php

namespace App\Models;

use App\Models\Victim;
use Illuminate\Database\Eloquent\Model;

class Neighbourhood extends Model
{
    protected $fillable = ['id', 'special_id', 'name', 'description', 'lat', 'long', 'created_at', 'updated_at'];
}
