<?php

namespace App\Models;
use Illuminate\Auth\Authenticatable as basicAuthenticatable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Etudiants extends Model implements Authenticatable
{
    use HasFactory;
    use basicAuthenticatable;

    protected $fillable=['numEtudiant','nom','prenom','numTel','adresse','CP','ville','niveau',
    'formation','user_id','tuteur_id'];

}
