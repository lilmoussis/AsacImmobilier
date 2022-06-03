<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promesses', function (Blueprint $table) {
            $table->id();
            $table->double('prixht');
            $table->text('numero');
            $table->double('tva');
            $table->double('prixttc')->nullable();
            $table->double('avance');
            $table->text('etat');
            $table->foreignId('avocatid')
                ->constrained('avocats')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('appartementid')
                ->constrained('appartements')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('clientid')
                ->constrained('clients')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('userid')
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('promesses');
    }
};
