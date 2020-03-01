<?php

declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
                'role_id' => 1, 'first_name' => 'ciro', 'last_name' => 'mora', 'email' => 'ciro@test.com',
                'password' => '$2y$10$4O4aqAkMC1LwqFqSJm8GLeER.SkKFWIFu1Pr0iIil4c/zz0PBZLS.'
            ],
            [
                'role_id' => 1, 'first_name' => 'admin', 'last_name' => 'smith', 'email' => 'admin@test.com',
                'password' => '$2y$10$4O4aqAkMC1LwqFqSJm8GLeER.SkKFWIFu1Pr0iIil4c/zz0PBZLS.'
            ],
            [
                'role_id' => 2, 'first_name' => 'client', 'last_name' => 'smith', 'email' => 'client@test.com',
                'password' => '$2y$10$4O4aqAkMC1LwqFqSJm8GLeER.SkKFWIFu1Pr0iIil4c/zz0PBZLS.'
            ]
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
