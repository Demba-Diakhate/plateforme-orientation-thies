<?php

namespace App\Models;

use App\Models\ProfilEntreprise;
use Illuminate\Database\Eloquent\Model;

class Emploi extends Model
{
    protected $guarded = ['id'];

    public function profilEntreprise(){
        return $this->belongsTo(ProfilEntreprise::class);
    }
}
