<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('reminders', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary Key
            $table->bigInteger('note_id')->unsigned(); // Foreign Key
            $table->timestamp('reminder_time');
            $table->timestamps(); // Created at and updated at

            // Foreign Key Constraint
            $table->foreign('note_id')->references('id')->on('notes')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reminders');
    }
};
