<?php
declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lead_management_service', function (Blueprint $table) {
            $table->foreignId('lead_management_id')->constrained();
            $table->foreignId('service_id')->constrained();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lead_management_service');
    }
};
