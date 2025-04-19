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
        Schema::table('warships', function (Blueprint $table) {
            $table->enum('mainarmaments',['120mm','127mm','130mm','152mm','230mm','280mm','320mm','356mm','381mm','406mm','460mm'])->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('warships', function (Blueprint $table) {
            //
        });
    }
};
