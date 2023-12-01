<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aceptation extends Model
{
    use HasFactory;
    protected $guarded=['id','created_at','updated_at'];

    public function participant()
{
    return $this->belongsTo(Participant::class, 'participant_id');
}

}
