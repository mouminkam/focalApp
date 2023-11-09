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
        Schema::create('users_info', function (Blueprint $table) {
            $table->id();
            $table->forignId('user_id')->constrained('users');
            $table->string('full_name');
            $table->enum('city',['Damascus','Aleppo','Homs','Daraa','Latakia','Tartus','Deir ez-Zor','Hama','Idlib','Al-Hasakah','Quneitra','Ar-Raqqah','As-Suwayda']);
            $table->string('phone_number');
            $table->string('facebook_account');
            $table->string('linked_in_account');
            $table->string('behanc_account');
            $table->string('profile_photo');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_info');
    }
};
