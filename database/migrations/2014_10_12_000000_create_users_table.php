<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            
            $table->string('name');
            $table->string('email')->nullable()->unique();
            $table->string('phone')->nullable()->unique();
            $table->string('photo')->default('storage/images/user.jpg');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        User::create(['name'=>'Alim mondol','email'=>'super-admin@email.com','phone'=>'010000000000','password'=>Hash::make('12345678')]);
        User::create(['name'=>'Tanvir mondol','email'=>'company-admin@email.com','phone'=>'020000000000','password'=>Hash::make('12345678')]);
        User::create(['name'=>'Yakub ali','email'=>'hr@email.com','phone'=>'030000000000','password'=>Hash::make('12345678')]);
        User::create(['name'=>'Nazrul','email'=>'employee@email.com','phone'=>'040000000000','password'=>Hash::make('12345678')]);
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
};
