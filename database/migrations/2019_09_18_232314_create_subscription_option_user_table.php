<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionOptionUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscription_option_user', function (Blueprint $table) {
            $table->unsignedBigInteger('id_subscription_option');
            $table->unsignedBigInteger('id_user');
            $table->date('subscription_stard');
            $table->date('subscription_end');
            $table->primary(['id_subscription_option', 'id_user']);
            $table->timestamps();

            $table->foreign('id_subscription_option')->references('id')->on('subscription_options')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscription_option_user');
    }
}
