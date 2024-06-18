<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria; //usamos el modelo User

class CategoriaSeeder extends Seeder
{
    public function run(): void
    {
  //llama a la clase Factory y crea 10 registros en la tabla usuarios
        Categoria::factory(5)->create();
    }
}