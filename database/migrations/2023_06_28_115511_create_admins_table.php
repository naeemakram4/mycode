<?php
declare(strict_types=1);

use App\Models\Admin;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone', 16)->nullable();
            $table->string('email', 50)->unique()->nullable();
            $table->string('user_name', 50)->unique();
            $table->string('password', 255);
            $table->enum('status', Admin::allStatus())->default(Admin::STATUS_ACTIVE);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
