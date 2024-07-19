<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutosSeeders extends Seeder
{
    
    public function run(): void
    {
        Produto::create(
            [
                'nome' => 'Matheus Junior',
                'valor' => '20.50',
                'nome' => 'Wesley Santos',
                'valor' => '19.60'
            ]
            );
    }
}
