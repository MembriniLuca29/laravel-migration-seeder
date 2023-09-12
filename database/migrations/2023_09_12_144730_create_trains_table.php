<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 32);
            $table->string('stazione di partenza', 64);
            $table->string('stazione di arrivo', 64);
            $table->date('giorno_di_partenza');
            $table->time('orario di partenza', $precision = 0);
            $table->time('orario di arrivo', $precision = 0);
            $table->mediumInteger('codice treno');
            $table->smallInteger('numero carrozze');
            $table->boolean('in orario')->default(true);
            $table->boolean('cancellato')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
