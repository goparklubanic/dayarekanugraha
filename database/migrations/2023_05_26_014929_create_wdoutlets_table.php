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
        Schema::create('wdoutlets', function (Blueprint $table) {
            $table->id();
            $table->string('jenisoutlet');
            $table->string('iconUrl');
            $table->enum('tampil',['ya','tidak'])->default('tidak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wdoutlets');
    }
};
