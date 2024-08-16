<?php

namespace App;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
   //use HasFactory;
   protected $guarded = [];

   public function category(){
      return $this->belongsTo(Category::class);
   }
    
}
