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
        Schema::table('users', function (Blueprint $table) {
            // Add role column if not already exists
            if (!Schema::hasColumn('users', 'role')) {
                $table->string('role')->default('patient')->after('password');
            }

            // Add hospital_id column if not already exists
            if (!Schema::hasColumn('users', 'hospital_id')) {
                $table->string('hospital_id')->nullable()->after('role');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'role')) {
                $table->dropColumn('role');
            }

            if (Schema::hasColumn('users', 'hospital_id')) {
                $table->dropColumn('hospital_id');
            }
        });
    }
};