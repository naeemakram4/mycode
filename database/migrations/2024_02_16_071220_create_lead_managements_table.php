<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lead_managements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lead_management_type_id')->constrained();
            $table->foreignId('service_id')->constrained();
            $table->foreignId('client_id')->nullable()->constrained();
            $table->string('lead_from')->nullable();
            $table->string('lead_value');
            $table->string('company')->nullable();
            $table->string('position')->nullable();
            $table->string('website')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('contact')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('status')->nullable();
            $table->text('note')->nullable();
            $table->boolean('seo_audit')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lead_managements');
    }
};
