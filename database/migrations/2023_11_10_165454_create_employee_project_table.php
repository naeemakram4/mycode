<?php
declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('employee_project', function (Blueprint $table) {
            $table->foreignId('employee_id')->constrained();
            $table->foreignId('project_id')->constrained();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employee_project');
    }
};
