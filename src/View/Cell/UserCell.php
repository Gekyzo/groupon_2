<?php

declare(strict_types=1);

namespace App\View\Cell;

use Cake\View\Cell;

/**
 * User cell
 */
class UserCell extends Cell
{
    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Initialization logic run at the end of object construction.
     *
     * @return void
     */
    public function initialize(): void
    {
    }

    /**
     * Muestra el icono de acceso de usuario correspondiente. Login o Logout.
     *
     * @param \Authentication\Identity|null $currentUser
     * @return void
     */
    public function display(?\Authentication\Identity $currentUser)
    {
        if ($currentUser) {
            $this->viewBuilder()->setTemplate('logout');
        } else {
            $this->viewBuilder()->setTemplate('login');
        }
    }
}
