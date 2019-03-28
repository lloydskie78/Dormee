<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('status')->default(0);
            $table->integer('user_type_id')->unsigned();
            $table->foreign('user_type_id')->references('id')->on('user_types');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->tinyInteger('email_confirmed')->default(0);
            $table->string('password');
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('gender', array('Male', 'Female'));
            $table->integer('occupation_id')->unsigned();
            $table->foreign('occupation_id')->references('id')->on('occupations');
            $table->tinyInteger('is_roommate')->default(0);
            $table->date('birthdate');
            $table->string('about')->nullable();
            $table->longText('photo')->nullable();
            $table->enum('schedule', array('morning', 'afternoon', 'evening', 'night'))->nullable();
            $table->time('waking_time')->nullable();
            $table->time('sleeping_time')->nullable();
            $table->rememberToken();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP()'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP()'));
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
