<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDpoTable extends Migration
{
    public function up()
    {
        Schema::create('dpo', function (Blueprint $table) {
            $table->string('nik')->primary();  // NIK sebagai primary key
            $table->string('name');  // Nama orang yang terdaftar sebagai DPO
            $table->enum('status', ['DPO', 'Bukan DPO'])->default('Bukan DPO');  // Status apakah DPO atau bukan
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dpo');
    }
}