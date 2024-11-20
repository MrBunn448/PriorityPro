<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('note_history', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary Key
            $table->bigInteger('note_id')->unsigned(); // Foreign Key
            $table->text('content');
            $table->timestamp('updated_at'); // Track when the note was updated

            // Foreign Key Constraint
            $table->foreign('note_id')->references('id')->on('notes')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('note_history');
    }
};
