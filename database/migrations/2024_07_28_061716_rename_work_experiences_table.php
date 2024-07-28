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
        // Schema::rename('work_experiences', 'employment_experiences');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::rename('employment_experiences', 'work_experiences');
    }
};
