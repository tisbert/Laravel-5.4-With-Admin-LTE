<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('login')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('department', ['','PDPT','BAAK','REKTORAT','BAU','LPPM']);
            $table->enum('jobtitle',['', 'staff','sysadmin', 'rektor']);
            $table->enum('approle',['', 'user','admin']);
            $table->enum('status',['', 'enable','disable']);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
