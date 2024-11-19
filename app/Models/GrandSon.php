<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;
use App\Models\Son;
class GrandSon extends Model
{
    protected $guarded = [];
    public function son(){
        return $this->belongsTo(Son::class);
    }
}
