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

        
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title',100);
            $table->text('description');
            $table->text('thumb')->nullable();
            $table->string('price')->nullable();
            $table->string('series')->nullable();
            $table->string('sale_date')->nullable();
            $table->string('type')->nullable();
            $table->string('artists')->nullable();
            $table->string('writers')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};


