<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Beans Table Migration
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beans', function (Blueprint $table) {
            $table->id(); 
            $table->string('img')->nullable();  
            $table->string('title');
            $table->string('subtitle')->nullable(); 
            $table->text('description')->nullable(); 
            $table->decimal('price', 8, 2);  // 'price' column, with a maximum of 8 digits and 2 decimal places
            $table->timestamp('arrived_at')->nullable();
            $table->integer('total_sales')->default(0);
            $table->integer('total_likes')->default(0);
            $table->timestamps();  // Automatically adds 'created_at' and 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beans');
    }
};
