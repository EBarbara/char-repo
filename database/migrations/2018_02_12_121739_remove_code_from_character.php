<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveCodeFromCharacter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        if (Schema::hasColumn('characters', 'code')) {
            Schema::table('characters', function (Blueprint $table) {
                $table->dropColumn('code');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        if (!Schema::hasColumn('characters', 'code')) {
            Schema::table('characters', function (Blueprint $table) {
                $table->string('code');
            });
        }
    }
}
