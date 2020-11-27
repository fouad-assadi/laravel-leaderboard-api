<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApiUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        |  Schema::hasTable to ignore if already exist
        |
        */      
        if(!Schema::hasTable('api_users')){
            Schema::create(  'api_users', function (Blueprint $table) {

            /*
            |  Choosing datatypes
            |
            */

                $table->increments('id'); 
                $table->string('name');
                $table->integer('age')->default(0);
                $table->integer('points')->default(0);
                $table->text('address')->nullable()->default(null);
                $table->timestamps();
            });
        };
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('api_users');
    }
}
