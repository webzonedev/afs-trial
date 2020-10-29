<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyLawyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_lawyers', function (Blueprint $table) {
            $table->unsignedBigInteger('company_id');
            $table->string('lawyer_name');
            $table->string('lawyer_email');
            $table->string('lawyer_phone');
            $table->string('lawyer_mobile');
            $table->string('lawyer_fax');
            $table->string('lawyer_address');
            $table->string('law_office_name');
            $table->string('lawyer_mof_number');

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
        Schema::dropIfExists('company_lawyers');
    }
}
