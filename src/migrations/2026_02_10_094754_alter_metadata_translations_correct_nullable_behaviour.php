<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('metadata_translations', function (Blueprint $table) {
            $table->text('description')->nullable()->change();
            $table->text('og_description')->nullable()->change();
        });
    }
};
