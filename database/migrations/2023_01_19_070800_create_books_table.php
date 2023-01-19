<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->integer('page_count');
            $table->foreignId('author_id')
                ->constrained()
                ->restrictOnDelete();
            $table->timestamps();

        });
    }


    public function down()
    {
        Schema::dropIfExists('books');
    }
};
