 <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     
    public function up(): void
    {
        Schema::create('carros', function (Blueprint $table) {
            $table->id();  
            $table->string('marca'); 
            $table->string('modelo');  
            $table->integer('ano');  
            $table->decimal('preco', 10, 2);  
            $table->string('cor')->nullable(); 
            $table->text('descricao')->nullable();  
            $table->string('quilometragem'); 
            $table->string('tipo_combustivel')->nullable();  
            $table->string('cambio')->nullable();  
            $table->string('imagem_url')->nullable();  
            $table->boolean('disponivel')->default(true); 
            $table->timestamps(); 
        });
    }
 
     
    public function down(): void
    {
        Schema::dropIfExists('carros');
    }
}; 