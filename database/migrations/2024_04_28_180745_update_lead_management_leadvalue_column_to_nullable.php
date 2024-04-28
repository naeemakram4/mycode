<?php
declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('lead_managements', function (Blueprint $table) {
            $table->string('lead_value')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('lead_managements', function (Blueprint $table) {
            $table->string('lead_value')->nullable(false)->change();
        });
    }
};
