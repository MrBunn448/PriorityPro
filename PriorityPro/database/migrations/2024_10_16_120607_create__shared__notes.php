<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('shared_notes', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary Key
            $table->bigInteger('note_id')->unsigned(); // Foreign Key
            $table->bigInteger('shared_with_user_id')->unsigned(); // User with whom the note is shared
            $table->timestamps(); // Created at and updated at

            // Foreign Key Constraints
            $table->foreign('note_id')->references('id')->on('notes')->onDelete('cascade');
            $table->foreign('shared_with_user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('shared_notes');
    }
};

