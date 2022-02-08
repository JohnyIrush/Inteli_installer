<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntelisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intelis', function (Blueprint $table) {
            $table->id();
            $table->text('school_name');
            $table->text('text');
            $table->integer('school_admin_id');
            $table->boolean('installation_status');
            $table->integer('subscription_id');
            $table->timestamp('installation_date');
            $table->timestamp('uninstallation_date');
            $table->string('school_email')->unique();;
            $table->string('school_address')->unique();;
            $table->string('school_phone')->unique();;
            $table->string('school_type_id');
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
        Schema::dropIfExists('intelis');
    }
}
