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
            ],
            [
                'name' => 'belleza',
                'body' => 'mens sana in corpore sano',
            ],
            [
                'name' => 'experiencias',
                'body' => 'si te gusta la adrenalina, este es tu sitio',
            ],
            [
                'name' => 'viajes',
                'body' => 'disfruta de una esa escapada que tanto esperabas',
            ],
            [
                'name' => 'restaurantes',
                'body' => 'la mejor oferta gastronómica de tu ciudad',
            ],
        ];

        $table = $this->table('categories');
        $table->insert($data)->save();
    }
}
