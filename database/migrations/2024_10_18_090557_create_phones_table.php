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
        Schema::create('phones', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->text('description')->nullable();
            $table->integer('release_year'); 
            $table->string('processor');
            $table->decimal('price', 10, 2);
            $table->string('photo')->nullable();
            $table->integer('camera_mp');
            $table->integer('storage'); //gb
            $table->integer('ram'); 
            $table->integer('battery'); //mah
            $table->decimal('screen_size', 3, 1);
            $table->string('colours')->nullable();
            $table->string('performance')->nullable();
            $table->string('brand');
            $table->string('purchase')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phones');
    }
};
