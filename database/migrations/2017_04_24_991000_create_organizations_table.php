<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_of_org');
            $table->text('description');
            $table->timestamps();
        });

        Schema::table('organizations', function($table){
            $table->integer('address_id')->unsigned()->index()->nullable();
            $table->foreign('address_id')
                    ->references('id')->on('address')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->integer('location_id')->unsigned()->index()->nullable();
            $table->foreign('location_id')
                    ->references('id')->on('locations')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->integer('user_id')->unsigned()->index()->nullable();
            $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organizations');
    }
}
