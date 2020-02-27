<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class UserTableConstrains extends AbstractMigration
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
        $this->table('users')
            ->dropForeignKey('role_id', 'users_ibfk_1')
            ->addForeignKeyWithName('FK_UserRole_rid', 'role_id', 'roles')
            ->update();
    }
}
