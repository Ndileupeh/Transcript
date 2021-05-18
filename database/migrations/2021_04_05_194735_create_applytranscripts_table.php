<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplytranscriptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applytranscripts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('matricule');
            $table->string('faculty');
            $table->string('department');
            $table->enum('degree',['Ls', 'BSc', 'MSc', 'phD']);
            $table->enum('status', ['current', 'former']);
            $table->enum('transcriptstatus', ['Pending', 'Processing', 'Completed','Taken'])->default('Pending');
            $table->string('level');
            $table->enum('mode', ['normal', 'fast', 'superfast']);
            $table->string('email');
            $table->integer('number');
            $table->integer('amount');
            $table->string('location');
            $table->string('address');
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
        Schema::dropIfExists('applytranscripts');
    }
}
