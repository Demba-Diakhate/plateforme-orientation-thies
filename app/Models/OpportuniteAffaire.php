<?php

namespace App\Models;

use App\Models\ProfilEntreprise;
use Illuminate\Database\Eloquent\Model;

class OpportuniteAffaire extends Model
{
    protected $guarded = ['id'];

    public function entreprise(){
        return $this->belongsTo(ProfilEntreprise::class);
    }

}
