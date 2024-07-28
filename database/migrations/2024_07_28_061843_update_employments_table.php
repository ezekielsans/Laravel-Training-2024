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
        // Schema::table('employment_experiences', function (Blueprint $table) {
        //     $table->renameColumn('company', 'company_name');

        //     $table->text('position')->after('')->change();

        //     $table->string('new_column');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('employment_experiences', function (Blueprint $table) {
        //     $table->renameColumn('company_name', 'company');

        //     $table->string('position')->after('')->change();

        //     $table->dropColumn('new_column');
        // });
    }
};
