<?php
declare(strict_types=1);

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
//            $table->foreignId('role_id')->constrained('role_dims');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('user_name', 50)->unique();
            $table->string('phone', 16)->nullable();
            $table->string('email', 50)->unique()->nullable();
            $table->string('password', 255);
            $table->enum('status', User::allStatus());
            $table->rememberToken();
            $table->timestamp('last_login')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
