<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDefaultLevelAndAttributes extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::table('characters', function (Blueprint $table) {
            $table->integer('level')->default(1)->change();
            $table->integer('str')->default(10);
            $table->integer('dex')->default(10);
            $table->integer('con')->default(10);
            $table->integer('int')->default(10);
            $table->integer('wis')->default(10);
            $table->integer('cha')->default(10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::table('characters', function (Blueprint $table) {
            $table->integer('level')->default(NULL)->change();
            $table->dropColumn('str');
            $table->dropColumn('dex');
            $table->dropColumn('con');
            $table->dropColumn('int');
            $table->dropColumn('wis');
            $table->dropColumn('cha');
        });
    }
}
