<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Authentication\PasswordHasher\DefaultPasswordHasher;
use Authentication\IdentityInterface;



/**
 * Customer Entity
 *
 * @property int $id
 * @property string $name
 * @property \Cake\I18n\FrozenDate $dob
 * @property string $address
 * @property int $contact_num
 * @property string $type
 * @property string|null $password
 * @property string $email
 *
 * @property \App\Model\Entity\Order[] $orders
 */
class Customer extends Entity implements IdentityInterface
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
        'dob' => true,
        'address' => true,
        'contact_num' => true,
        'type' => true,
        'password' => true,
        'email' => true,
        'orders' => true,
        'user_role' => true,
    ];
    // Automatically hash passwords when they are changed.
    protected function _setPassword(string $password)
    {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($password);
    }

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];

    /**
     * Authentication\IdentityInterface method
     */
    public function getIdentifier()
    {
        return $this->id;
    }

    /**
     * Authentication\IdentityInterface method
     */
    public function getOriginalData()
    {
        return $this;
    }
}
