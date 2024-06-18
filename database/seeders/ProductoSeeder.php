<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto; //usamos el modelo User

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
  //llama a la clase Factory y crea 10 registros en la tabla usuarios
        Producto::factory(30)->create();
    }
}
