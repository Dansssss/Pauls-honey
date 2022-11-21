<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Stock Entity
 *
 * @property int $id
 * @property string $product_name
 * @property \Cake\I18n\FrozenDate $date
 * @property int $old_quantity
 * @property int $new_quantity
 * @property float $cost_price
 * @property float $selling_price
 * @property \Cake\I18n\FrozenDate $date_of_manufacture
 * @property \Cake\I18n\FrozenDate $expiration_date
 * @property int $product_id
 * @property int $order_id
 *
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\Order $order
 */
class Stock extends Entity
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
        'product_name' => true,
        'date' => true,
        'old_quantity' => true,
        'new_quantity' => true,
        'cost_price' => true,
        'selling_price' => true,
        'date_of_manufacture' => true,
        'expiration_date' => true,
        'product_id' => true,
        'order_id' => true,
        'product' => true,
        'order' => true,
    ];
}
