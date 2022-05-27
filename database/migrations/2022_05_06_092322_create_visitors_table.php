<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->string('patient_id');
            $table->string('patient_name');
            $table->string('name');
            $table->string('type');
            $table->string('department');
            $table->time('end_date');
            $table->time('start_date');
            $table->date('date');
            $table->date('seconed_date');
            
            $table->string('status');

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('visitors');
    }
};
