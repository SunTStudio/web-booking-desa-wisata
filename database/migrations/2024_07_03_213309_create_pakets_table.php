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
        Schema::create('pakets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('batik_id')->constrained('batiks');
            $table->foreignId('kesenian_id')->constrained('kesenians');
            $table->string('study_banding');
            $table->foreignId('cocok_tanam_id')->constrained('cocok_tanams');
            $table->foreignId('permainan_id')->constrained('permainans');
            $table->string('homestay');
            $table->foreignId('kuliner_id')->constrained('kuliners');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pakets');
    }
};
