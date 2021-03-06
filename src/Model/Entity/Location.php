<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Location Entity
 *
 * @property float $LOCATION_ID
 * @property string|null $STREET_ADDRESS
 * @property string|null $POSTAL_CODE
 * @property string|null $CITY
 * @property string|null $STATE_PROVINCE
 * @property string|null $COUNTRY_ID
 */
class Location extends Entity
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
        'STREET_ADDRESS' => true,
        'POSTAL_CODE' => true,
        'CITY' => true,
        'STATE_PROVINCE' => true,
        'COUNTRY_ID' => true,
    ];
}
