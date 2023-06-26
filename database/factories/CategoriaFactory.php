<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categoria>
 */
class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->randomElement
            (['Ação',
            'Arcade e Ritmo',
            'Hack and Slash',
            'Luta e Artes Marciais',
            'Plataformas e Corridas Intermináveis',
            "Shoot 'em Up",
            'Tiro em Primeira Pessoa (FPS)',
            'Tiro em Terceira Pessoa',
            'Aventura',
            'Casuais',
            'Metroidvania',
            'Objetos Escondidos',
            'Quebra-Cabeça',
            'RPGs de Aventura',
            'Romance Visual',
            'Trama Excepcional',
            'RPG',
            'JRPGs',
            'RPGs de Aventura',
            'RPGs de Ação',
            'RPGs de Estratégia',
            'RPGs em Grupos',
            'RPGs em Turnos',
            'Roguelike',
            'Simulação',
            'Construção e Automação',
            'Empregos e Passatempos',
            'Encontros',
            'Espaço e Aviação',
            'Física e "Faça o que Quiser',
            'Rurais e de Fabricação',
            'Vida e Imersivos',
            'Estratégia',
            'Cidades e Colônias',
            'Defesa de Torres',
            'Estratégia Baseada em Turnos',
            'Estratégia em Tempo Real (RTS)',
            'Grande Estratégia e 4X',
            'Militar',
            'Tabuleiro e Cartas',
            'Esporte e Corrida',
            'Corrida',
            'Esporte em Equipe',
            'Esportes',
            'Esportes Individuais',
            'Pescaria e Caça',
            'Simuladores Automobilísticos',
            'Simuladores de Esporte',
            'Temas',
            'Anime',
            'Espaciais',
            'Ficção Científica e Cyberpunk',
            'Mistério e Investigação',
            'Mundo Aberto',
            'Sobrevivência',
            'Terror',
            'Jogadores',
            'Competitivo On-line',
            'Cooperativo',
            'MMO',
            'Multijogador',
            'Multijogador Local e em Grupo',
            'Rede Local (LAN)',
            'Um Jogador',])
        ];
    }
}



