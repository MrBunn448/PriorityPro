<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary Key
            $table->bigInteger('user_id')->unsigned(); // Foreign Key
            $table->string('title');
            $table->text('content');
            $table->string('color')->nullable(); // Optional field for color palette
            $table->integer('priority')->nullable(); // Optional field
            $table->string('status')->nullable(); // Possible values: 'active', 'completed', 'archived'
            $table->timestamps(); // Created at and updated at

            // Foreign Key Constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('notes');
    }
};
