<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $guarded=['id','created_at','updated_at'];

    public function convocatories()
{
    return $this->hasMany(Convocatory::class, 'id');
}
}
