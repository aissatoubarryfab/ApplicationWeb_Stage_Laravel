<?php

namespace App\Models;
use Illuminate\Auth\Authenticatable as basicAuthenticatable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre_de_stages extends Model implements Authenticatable
{
    use HasFactory;
    use basicAuthenticatable;
    protected $fillable = ['titre','debut','fin','description','entreprise_id'];
}
