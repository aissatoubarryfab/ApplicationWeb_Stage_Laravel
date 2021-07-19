<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as basicAuthenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprises extends Model implements Authenticatable
{
    use HasFactory;
    use basicAuthenticatable;

    protected $fillable = ['raison_soc','numTel','numRue','nomRue','ville','codePostal','user_id'];

}
