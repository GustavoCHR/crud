<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categoria>
 */
class CategoriaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nome' => fake()->unique()->randomElement
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
            'RPGs de Aventura',])
        ];
    }
}



