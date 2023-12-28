<?php

use App\Models\Setting;
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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('field');
            $table->text('value');
            $table->timestamps();
        });

        Setting::create(['field'=>'system_title','value'=>'Mbrella HR']);
        Setting::create(['field'=>'header-logo','value'=>'/storage/images/header-logo.png']);
        Setting::create(['field'=>'mother_company','value'=>'Mondol Group']);
        Setting::create(['field'=>'favicon','value'=>'/storage/images/favicon.png']);
        Setting::create(['field'=>'powered_by','value'=>'IT @Mbrella']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
