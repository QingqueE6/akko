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
        Schema::create('anime', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("title");
            $table->integer("year_watched");
            $table->string("form");
            $table->string("status")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anime');
    }
};
