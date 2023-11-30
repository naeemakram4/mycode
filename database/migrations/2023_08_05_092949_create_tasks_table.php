<?php
declare(strict_types=1);

use App\Models\Task;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained();
            $table->foreignId('service_id')->constrained();
            $table->string('subject')->nullable();
            $table->string('description')->nullable();
            $table->enum('priority', Task::allTaskPriorities());
            $table->enum('status', Task::allTaskStatus())->default(Task::YET_TO_STATUS);
            $table->date('due_date');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
