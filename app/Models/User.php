<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Role;
use App\Models\ProfilCoach;
use App\Models\ProfilJeune;
use App\Models\ProfilFreelance;
use App\Models\ProfilEntreprise;
use App\Models\ProfilEcoleFormation;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function profilCoach(){
        return $this->belongsTo(ProfilCoach::class);
    }

    public function profilFreelance(){
        return $this->belongsTo(ProfilFreelance::class);
    }

    public function profilEntreprise(){
        return $this->belongsTo(ProfilEntreprise::class);
    }

    public function profilJeune(){
        return $this->belongsTo(ProfilJeune::class);
    }


    public function profilEcoleFormation(){
        return $this->belongsTo(ProfilEcoleFormation::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
