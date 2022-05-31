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
        Schema::create('desistements', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->string('cause');
            $table->foreignId('promesseid')
                ->constrained('promesses')
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
        Schema::dropIfExists('desistements');
    }
};