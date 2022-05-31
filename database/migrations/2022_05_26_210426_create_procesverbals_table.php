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
        Schema::create('procesverbals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contratid')
                ->constrained('contrats')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('numero');
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
        Schema::dropIfExists('procesverbals');
    }
};
