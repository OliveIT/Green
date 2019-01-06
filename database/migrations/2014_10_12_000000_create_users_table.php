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
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->string('Business');
            $table->string('Email');
            $table->string('Phone');
            $table->string('Zip');
            $table->string('City');
            $table->string('State');
            $table->string('Utility_ID');
            $table->string('Utility_Name');
            $table->string('Utility_Name_Other');
            $table->string('UID');
            $table->string('PT');
            $table->string('Credentials_Validation_Status');
            $table->boolval('Accept_Service_Agreement');
            $table->string('Source');
            $table->boolval('Source');
            $table->date_time_set('Created_Date');
            $table->date_time_set('Modified_Date');
            $table->string('Password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
