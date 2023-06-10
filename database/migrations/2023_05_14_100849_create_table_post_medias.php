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
        $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp'];
        $videoExtensions = ['mp4', 'mov', 'avi', 'wmv', 'mkv'];

        $extensions = array_merge($imageExtensions, $videoExtensions);

        Schema::create('post_medias', function (Blueprint $table) use ($extensions) {
            $table->bigIncrements('id');
            $table->string('name', 255);
            $table->text('path');
            $table->enum('type', $extensions);
            $table->foreignId('post_id')->references('id')->on('posts');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_medias');
    }
};
