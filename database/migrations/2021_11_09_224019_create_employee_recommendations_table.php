<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeRecommendationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_recommendations', function (Blueprint $table) {
            $table->id();
            $table->text('text'); // You are about to burnout. You should have better work life balance and sleep more. 
            $table->double('lower_limit'); 
            $table->double('upper_limit');
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
        Schema::dropIfExists('recommendations_for_employee');
    }
}