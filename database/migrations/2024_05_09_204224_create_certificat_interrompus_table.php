<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificatInterrompusTable extends Migration
{
    public function up()
    {
        Schema::create('certificat_interrompus', function (Blueprint $table) {
            $table->id();
            $table->string('nom_complet');
            $table->string('derniere_annee_scolaire');
            $table->date('date_de_naissance');
            $table->string('numero_telephone');
            $table->string('statut')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('certificat_interrompus');
    }
}

