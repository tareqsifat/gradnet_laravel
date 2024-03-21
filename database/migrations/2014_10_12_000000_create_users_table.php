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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('number')->nullable();
            $table->string('city')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('photo')->nullable();
            $table->string('member_type')->nullable();
            $table->string('ssc_roll')->nullable();
            $table->string('ssc_board')->nullable();
            $table->string('ssc_reg')->nullable();
            $table->string('ssc_document')->nullable();
            $table->string('nid_no')->nullable();
            $table->string('nid_scanned')->nullable();
            $table->text('emergency_contact')->nullable();
            $table->text('permanent_address')->nullable();
            $table->string('brn_number')->nullable();
            $table->string('passing_year')->nullable();
            $table->date('birth_day')->nullable();
            $table->integer('blood_group')->nullable();
            $table->boolean('is_approved')->default(false)->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
