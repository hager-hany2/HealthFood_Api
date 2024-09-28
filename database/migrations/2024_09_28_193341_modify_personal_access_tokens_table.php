<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('personal_access_tokens', function (Blueprint $table) {
            // Drop the existing unique index if it exists
            $table->dropUnique('personal_access_tokens_token_unique');

            // Add the new unique index
            $table->unique('token', 'personal_access_tokens_token_unique');
        });
    }

    public function down()
    {
        Schema::table('personal_access_tokens', function (Blueprint $table) {
            $table->dropUnique('personal_access_tokens_token_unique');
        });
    }
};
