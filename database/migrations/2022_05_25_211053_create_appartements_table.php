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
        Schema::create('appartements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('immeubleid')
                ->constrained('immeubles')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('numetage');
            $table->string('numappart');
            $table->double('superficie');
            $table->integer('nbrechambre');
            $table->double('prix');
            $table->string('etat');
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
        Schema::dropIfExists('appartements');
    }
};
