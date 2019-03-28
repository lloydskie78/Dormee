<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDormReviewReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_dorm_review_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInreger('status');
            $table->integer('reporter_id')->unsigned();
            $table->foreign('reporter_id')->references('id')->on('users');
            $table->integer('review_id')->unsigned();
            $table->foreign('review_id')->references('id')->on('user_dorm_reviews');
            $table->integer('admin_id')->unsigned();
            $table->foreign('admin_id')->references('id')->on('users');
            $table->string('subject');
            $table->string('body');
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
        Schema::dropIfExists('user_dorm_review_reports');
    }
}
