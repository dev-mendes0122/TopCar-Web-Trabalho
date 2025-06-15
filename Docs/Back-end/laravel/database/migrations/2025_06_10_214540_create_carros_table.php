 <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     
    public function up()
{
    Schema::create('carros', function (Blueprint $table) {
        $table->id();
        $table->string('nome');
        $table->integer('ano');
        $table->string('modelo');
        $table->decimal('valor', 10, 2);
        $table->string('cidade');
        $table->timestamps();
    });
}

 
     
    public function down(): void
    {
        Schema::dropIfExists('carros');
    }
}; 