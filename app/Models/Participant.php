<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = ['participante_estado'];
    protected $guarded=['id'];

    public function studends()
{
    return $this->belongsTo(Student::class, 'student_id');
}

    public function requests()
    {
        return $this->hasMany(Request::class, 'requests');
    }

    public function aceptations()
    {
        return $this->hasMany(Aceptation::class);
    }

    public function contracts()
    {
        return $this->hasMany(Contract::class);
    }

}
