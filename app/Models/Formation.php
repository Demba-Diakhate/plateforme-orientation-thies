<?php

namespace App\Models;

use App\Models\ProfilEcoleFormation;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $guarded  = ['id'];

    public function profilEcoleFormation(){
        return $this->belongsTo(ProfilEcoleFormation::class);
    }
}
