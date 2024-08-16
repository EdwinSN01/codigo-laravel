<?php

namespace App\Models;
use App\Servicio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Category extends Model
{
    public function servicios(){
        return $this->hasMany(Servicio::class);
    }
}
