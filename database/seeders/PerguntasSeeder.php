<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pergunta;

class PerguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Criar perguntas de exemplo
        Pergunta::create([
            'texto' => 'Qual seleção venceu a Copa do Mundo de 2014?',
            'opcao_a' => 'Argentina',
            'opcao_b' => 'Brasil',
            'opcao_c' => 'Alemanha',
            'opcao_d' => 'Espanha',
            'resposta_correta' => 'C',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual jogador é conhecido como "O Fenômeno"?',
            'opcao_a' => 'Neymar',
            'opcao_b' => 'Ronaldo Nazário',
            'opcao_c' => 'Ronaldinho Gaúcho',
            'opcao_d' => 'Romário',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual clube tem mais títulos da UEFA Champions League (até 2025)?',
            'opcao_a' => 'Real Madrid',
            'opcao_b' => 'Manchester United',
            'opcao_c' => 'Bayern de Munique',
            'opcao_d' => 'Barcelona',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Em que país nasceu o jogador Lionel Messi?',
            'opcao_a' => 'Espanha',
            'opcao_b' => 'Argentina',
            'opcao_c' => 'Uruguai',
            'opcao_d' => 'Paraguai',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual desses times NÃO é inglês?',
            'opcao_a' => 'Chelsea',
            'opcao_b' => 'Juventus',
            'opcao_c' => 'Arsenal',
            'opcao_d' => 'Liverpool',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);
    }
}

