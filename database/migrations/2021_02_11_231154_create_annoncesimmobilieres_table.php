<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesimmobilieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Create the annoncesimmobilieres table with fields
         */
        Schema::create('annoncesimmobilieres', function (Blueprint $table) {
            $table->id();
            $table->string("ref_annonce");
            $table->float("prix_annonce");
            $table->float("surface_habitable");
            $table->integer("nombre_de_piece");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annoncesimmobilieres');
    }
}
