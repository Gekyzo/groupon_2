<?php

declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Categories seed.
 */
class CategoriesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'relax',
                'body' => 'las mejores ofertas para que te relajes',
                'image' => 'relax.png'
            ],
            [
                'name' => 'belleza',
                'body' => 'mens sana in corpore sano',
                'image' => 'belleza.png'
            ],
            [
                'name' => 'cultura',
                'body' => 'tickets para los eventos que más te interesan',
                'image' => 'cultura.png'
            ],
            [
                'name' => 'experiencias',
                'body' => 'si te gusta la adrenalina, este es tu sitio',
                'image' => 'experiencias.png'
            ],
            [
                'name' => 'viajes',
                'body' => 'disfruta de una esa escapada que tanto esperabas',
                'image' => 'viajes.png'
            ],
            [
                'name' => 'restaurantes',
                'body' => 'la mejor oferta gastronómica de tu ciudad',
                'image' => 'restaurantes.png'
            ],
        ];

        $table = $this->table('categories');
        $table->insert($data)->save();
    }
}
