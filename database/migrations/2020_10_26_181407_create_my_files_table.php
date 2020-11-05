<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_files', function (Blueprint $table) {
            $table->id();

            $table->foreignId('company_id')
            ->nullable()
            ->constrained()
            ->onDelete('cascade');

            $table->foreignId('employee_id')
            ->nullable()
            ->constrained()
            ->onDelete('cascade');

            $table->string('filepath')->nullable();
            $table->string('filetitle')->nullable();
            $table->string('category')->nullable();

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
        Schema::dropIfExists('my_files');
    }
}
