<?php

declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Promotion Entity
 *
 * @property int $id
 * @property string $name
 * @property bool $state
 * @property int|null $category_id
 * @property float $price_original
 * @property float|null $price_discount
 * @property string $body
 * @property \Cake\I18n\FrozenTime $available_since
 * @property \Cake\I18n\FrozenTime|null $available_until
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $deleted
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Order[] $orders
 * @property \App\Model\Entity\Image[] $images
 */
class Promotion extends Entity
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
        'name' => true,
        'state' => true,
        'category_id' => true,
        'price_original' => true,
        'price_discount' => true,
        'body' => true,
        'available_since' => true,
        'available_until' => true,
        'created' => true,
        'deleted' => true,
        'category' => true,
        'orders' => true,
        'images' => true,
    ];
}
