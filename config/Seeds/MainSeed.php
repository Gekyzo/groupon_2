<?php

declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Main seed.
 */
class MainSeed extends AbstractSeed
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
        $this->call('RolesSeed');
    }
}
