<?php

use App\Models\Access_user;
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
        Schema::create('access_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');

            $table->unsignedBigInteger('access_id')->nullable();
            $table->foreign('access_id')->references('id')->on('accesses')->onUpdate('cascade')->onDelete('set null');

            $table->enum('status',['0','1'])->default(1);

            $table->timestamps();
        });

        Access_user::create(['user_id'=>'1', 'access_id'=>'1']);
        Access_user::create(['user_id'=>'2', 'access_id'=>'2']);
        Access_user::create(['user_id'=>'3', 'access_id'=>'3']);
        Access_user::create(['user_id'=>'4', 'access_id'=>'4']);
        Access_user::create(['user_id'=>'4', 'access_id'=>'3']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('access_user');
    }
};
