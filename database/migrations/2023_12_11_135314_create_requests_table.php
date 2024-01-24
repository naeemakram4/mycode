<?php
declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_id')->unique();
            $table->foreignId('client_id')->constrained();
            $table->foreignId('employee_id')->nullable()->constrained();
            $table->foreignId('request_type_id')->constrained();
            $table->string('subject');
            $table->string('file')->nullable();
            $table->text('description')->nullable();
            $table->enum('status', \App\Models\Request::getAllRequestStatus())->default(\App\Models\Request::REQUEST_PENDING_STATUS);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
