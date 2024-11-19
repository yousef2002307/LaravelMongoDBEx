<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;
use App\Models\User;
use App\Models\GrandSon;
class Son extends Model
{
   protected $guarded = [];
   public function user(){
      return $this->belongsTo(User::class);
   }
   public function grandsons(){
      return $this->hasMany(GrandSon::class);
   }
}
