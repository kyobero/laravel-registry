<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignInspectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assign__inspections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('date');
            $table->string('Available_time');
            $table->string('Name');
            $table->string('Email');
            $table->string('Phone_number');
            $table->boolean('completed')->default(false);
            $table->timestamp('due_date')->nullabe();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assign__inspections');
    }
}
