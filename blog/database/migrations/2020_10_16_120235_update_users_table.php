<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::table('users', function( Blueprint $table){

            $table ->boolean('is_active')->default(1);
            $table->unsignedInteger('role')->default(2);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         schema::table('users', function( Blueprint $table){

            $table ->dropColumn('is_active');
            $table ->dropColumn('role');

        });
    }
}
