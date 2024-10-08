<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        
        DB::table('users')->insert([
            ['userName' => 'admin', 'userPassword' => 'admin', 'userNombres' => 'admin', 'userApellidos' => 'admin', 'userCorreo' => ''],
        ]);
        DB::table('pagoType')->insert([
            ['pagoTypeId' => 1, 'pagoTypeName' => 'Tarjeta'],
            ['pagoTypeId' => 2, 'pagoTypeName' => 'Efectivo'],
            ['pagoTypeId' => 3, 'pagoTypeName' => 'Transferencia'],
            ['pagoTypeId' => 4, 'pagoTypeName' => 'Cheque'],
        ]);
        DB::table('nivel')->insert([
            ['nivelId' => 1, 'nivelName' => 'Basico'],
            ['nivelId' => 2, 'nivelName' => 'Intermedio'],
            ['nivelId' => 3, 'nivelName' => 'Avanzado'],
            ['nivelId' => 4, 'nivelName' => 'Profesional'],
        ]);
    }
}