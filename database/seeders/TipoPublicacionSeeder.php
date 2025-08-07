<?php

namespace Database\Seeders;

use App\Models\Configuracion\TipoPublicacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoPublicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Definición de Tipos de Publicaciones
        $tipos = [
            'Servicios',
            'Vehículos',
            'Productos'
        ];

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('config_tipo_publicacion')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        foreach ($tipos as $tipo) {
            TipoPublicacion::create([
                'nombre' => $tipo
            ]);
        }
    }
}
