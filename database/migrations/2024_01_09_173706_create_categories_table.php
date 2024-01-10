<?php

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name',25)->unique();
            $table->timestamps();
        });

        $names=['Sport', 'Politica', 'Economia', 'Tecnologia', 'Cultura', 'Cronaca', 'Meteo', 'Civiltà', 'Lavoro', 'Intrattenimento'];

        foreach($names as $name){
            Category::create([
                'name'=>$name,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
