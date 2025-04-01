<?php

namespace Database\Seeders;

use App\Livewire\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create([
            'nome' => 'bruno',
            'endereco' => 'rua 10',
            'telefone' => '(18)123124242',
            'CPF' => '13124',
            'email' => 'bruno@gmail.com',
            'password' => Hash::make('123456'),
            
            
        ]);

    }
}
