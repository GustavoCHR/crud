<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jogo>
 */
class JogoFactory extends Factory
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
            (['Fortnite',
            'League of Legends',
            'CrossFire',
            'Combat Arms',
            'Point Blank',
            'Roblox',
            'PUBG',
            'Battlefiel 1',
            'Battlefiel 3',
            'Battlefiel 4',
            'Battlefiel 5',
            'The Sims',
            'F1 2018',
            'F1 2020',
            'F1 2022',
            'F1 2023',
            'The Crew',
            'The Crew 2',
            'The Crew Motorfest',
            'Forza Horizon 4',
            'Forza Horizon 5',
            'Assetto Corsa',
            'Assetto Corsa Competizione',
            'Destiny 2',
            'God of War',
            'God of War 2',
            'God of War Ragnarok',
            "No Man's Sky",
            "Tomb Rider",
            "Rise of the Tomb Rider",
            "Shadow of the Tomb Rider",
            'The Sims 2',
            'The Sims 3',
            'The Sims 4',
            'Minecraft',
            'Lost Ark',
            'Counter-Strike: Global Offensive',
            'Counter-Strike 1.6',
            'Counter-Strike: Source',]),

            'categoria' => fake()->randomElement
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
            'Um Jogador',]),

            'ano_criacao' => fake()->year($max = 'now'),
            'valor' => fake()->numberBetween(0, 500),
        ];
    }
}
