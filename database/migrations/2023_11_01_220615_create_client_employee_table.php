<?php
declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('client_employee', function (Blueprint $table) {
            $table->foreignId('client_id')->constrained();
            $table->foreignId('employee_id')->constrained();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('client_employee');
    }
};
