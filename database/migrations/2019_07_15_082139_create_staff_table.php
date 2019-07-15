<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up () {
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nick', 10)->comment('花名');
            $table->string('name', 10)->comment('姓名');
            $table->enum('sex', ['male', 'female'])->default('male')->comment('性别');
            $table->string('card', 18)->comment('身份证');
            $table->string('address', 30)->comment('地址');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down () {
        Schema::dropIfExists('staff');
    }
}
