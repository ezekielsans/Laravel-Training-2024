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
        Schema::table('posts', function (Blueprint $table) {
            $table->string('title')->after('id');

            $table->text('short_content')->after('id');
            $table->longText('long_content')->after('id');

            $table->foreignId('user_id')->after('id');
            // ->constrained()->onDelete();
            // $table->foreignIdFor(User::class)->cascadeOnDelete();
            // $table->foreign('user_id');
            // $table->foreignUlid('user_ulid');
            // $table->foreignUuid('user_uuid');

            // $table->double()
            // $table->integer()

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
