<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departement extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'matiere_id',
        'departement_id'
    ];
}
