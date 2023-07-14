<?php

use App\Models\Category;
use App\Models\State;
use App\Models\User;
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
        Schema::create('adverts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->float('price');
            $table->boolean('isNegociable')->default(false);
            $table->text('description')->nullable();
            $table->foreignId(User::class);
            $table->foreignId(Category::class);
            $table->foreignId(State::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('adverts', function(Blueprint $table){
            $table->dropForeignIdFor(User::class);
            $table->dropForeignIdFor(Category::class);
            $table->dropForeignIdFor(State::class);
            $table->dropIfExists('adverts');
        });
    }
};
