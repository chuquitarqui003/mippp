<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;
    protected $guarded=['id','created_at','updated_at'];

    public function participants()
{
    return $this->hasOne(Participant::class, 'participant_id');
}

}
