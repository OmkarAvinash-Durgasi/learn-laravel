<?php

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
        Schema::create('offices', function (Blueprint $table) {
            $table->comment('Customers data is stored in the customers table');
            $table->id();
            $table->string('officeCode');
            $table->string('city');
            $table->string('phone');
            $table->string('addressLine1');
            $table->string('addressLine2');
            $table->string('state');
            $table->string('postalCode');
            $table->string('country');
            $table->string('territory');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offices');
    }
};
