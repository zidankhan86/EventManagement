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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_name');
            $table->longText('description');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('location');
            $table->string('registration_deadline');
            $table->boolean('is_published');
            $table->unsignedBigInteger('category_id');

            $table->foreign('category_id')->references('id')->on('event_categories')
            ->restrictOnDelete()
            ->restrictOnUpdate();;
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
