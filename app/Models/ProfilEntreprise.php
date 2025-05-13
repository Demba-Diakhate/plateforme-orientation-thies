<?php

namespace App\Models;

use App\Models\User;
use App\Models\Emploi;
use App\Models\OpportuniteAffaire;
use Illuminate\Database\Eloquent\Model;

class ProfilEntreprise extends Model
{
    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function emplois(){
        return $this->hasMany(Emploi::class);
    }

    public function opportuniteAffaire(){
        return $this->hasMany(OpportuniteAffaire::class);
    }
}
