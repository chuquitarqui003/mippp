<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['estudiante_nombre','estudiante_ap_materno','estudiante_ap_paterno','estudiante_codigo'];
    protected $guarded=['id'];

    public function peoples()
    {
        return $this->hasOne(People::class, 'people_id');
    }

    public function participants()
    {
        return $this->hasMany(Participant::class, 'participant_id');
    }

    public function presentations()
    {
        return $this->hasMany(Aceptation::class, 'presentation_id');
    }

    public function industries()
    {
        return $this->hasMany(Industry::class);
    }




}
