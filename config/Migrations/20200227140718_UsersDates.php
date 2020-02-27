<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class UsersDates extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $this->table('Users')
            ->changeColumn('created', 'datetime', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->changeColumn('deleted', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])->update();
    }
}
