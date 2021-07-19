<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as basicAuthenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dossiers extends Model
{
    use HasFactory;
    use basicAuthenticatable;

    protected $fillable = ['typeDoss','file_id','file_name','etudiant_id','stage_id'];
}
