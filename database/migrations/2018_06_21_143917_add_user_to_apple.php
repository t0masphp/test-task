<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserToApple extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('apples', function(Blueprint $t){
            $t->integer('user_id')->unsigned()->nullable();
            $t->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('apples', function(Blueprint $t){
            $t->dropForeign('apples_user_id_foreign');
            $t->dropColumn('user_id');
        });
    }
}
