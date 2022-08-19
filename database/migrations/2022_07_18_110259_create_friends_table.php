<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friends', function (Blueprint $table) {
            $table->bigIncrements('friend_id');
             $table->foreignId('user_id')->constrained('users', 'user_id');
             $table->string('fullname',100);
             $table->string('emailaddress')->unique();
             $table->string('nickname')->nullable();
             $table->enum('gender',['male','female']);
             $table->string('meetat',100)->default('Moat Academy');
             $table->string('phonenumber',25);
             $table->text('description')->nullable();
             $table->foreignId('country_id')->constrained('countries', 'country_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('friends');
    }
};
