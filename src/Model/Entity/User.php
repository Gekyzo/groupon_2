<?php

declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property int|null $role_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $password
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $deleted
 *
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Order[] $orders
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'role_id' => true,
        'first_name' => true,
        'last_name' => true,
        'email' => true,
        'password' => true,
        'created' => true,
        'deleted' => true,
        'role' => true,
        'orders' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];

    /**
     * Hashea la contraseña del usuario cuando se registra.
     *
     * @param string $password
     * @return string
     */
    protected function _setPassword(string $password): string
    {
        return (new DefaultPasswordHasher)->hash($password);
    }
}
