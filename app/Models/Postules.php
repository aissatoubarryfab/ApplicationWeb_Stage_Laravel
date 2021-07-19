<?php

namespace App\Models;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as basicAuthenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postules extends Model
{
    use HasFactory;
    use basicAuthenticatable;

    protected $fillable = ['etudiant_id','stage_id'];
}
