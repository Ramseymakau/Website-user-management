<?php
//2024_08_19_182449_add_role_to_users

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
      //  Schema::table('users', function (Blueprint $table) {
            //
     //   });
       // Schema::table('users', function (Blueprint $table) {
       //     $table->string('role');
       // });


        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      //  Schema::table('users', function (Blueprint $table) {
            //
       // });


        Schema::dropIfExists('roles');
    }


};