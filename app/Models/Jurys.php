<?php

namespace App\Models;
use Illuminate\Auth\Authenticatable as basicAuthenticatable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurys extends Model implements Authenticatable
{
    use HasFactory;
    use basicAuthenticatable;

    protected $fillable=['nom','prenom','statut','dateNaiss','numTel','user_id'];
}
