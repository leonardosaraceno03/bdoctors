<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {


            $table->id();
            $table->string('address');
            $table->string('cv')->nullable();
            $table->string('avatar')->nullable();
            $table->string('telephone')->nullable();
            $table->string('performance')->nullable();
            $table->string('description')->nullable();
            $table->boolean('visibility')->default(1);

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');

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

        Schema::dropIfExists('users', function (Blueprint $table) {
            $table->dropForeign('doctor_user_id_foreign');
            $table->dropColumn('user_id');
        });
    }
}
