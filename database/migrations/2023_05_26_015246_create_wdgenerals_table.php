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
        Schema::create('wdgenerals', function (Blueprint $table) {
            $table->id();
            $table->text('headerTitle');
            $table->text('headerDescription');
            $table->text('brandUrl');
            $table->longtext('mapUrl');
            $table->text('webUrl');
            $table->longText('about');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wdgenerals');
    }
};
