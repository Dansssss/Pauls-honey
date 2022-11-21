<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CompanyDetail Entity
 *
 * @property string $name
 * @property string $address
 * @property \Cake\I18n\FrozenDate $established_time
 * @property string $business_scope
 */
class CompanyDetail extends Entity
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
        'address' => true,
        'established_time' => true,
        'business_scope' => true,
    ];
}
