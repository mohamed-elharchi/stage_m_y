<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificatInterrompu extends Model
{
    use HasFactory;

    protected $fillable = ['nom_complet', 'derniere_annee_scolaire', 'date_de_naissance', 'numero_telephone', 'statut'];
}

