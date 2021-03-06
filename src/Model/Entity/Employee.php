<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employee Entity
 *
 * @property float $EMPLOYEE_ID
 * @property string|null $FIRST_NAME
 * @property string|null $LAST_NAME
 * @property string|null $EMAIL
 * @property string|null $PHONE_INTEGER
 * @property \Cake\I18n\FrozenDate|null $HIRE_DATE
 * @property string|null $JOB_ID
 * @property float|null $SALARY
 * @property float|null $COMMISSION_PCT
 * @property float|null $MANAGER_ID
 * @property float|null $DEPARTMENT_ID
 */
class Employee extends Entity
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
        'FIRST_NAME' => true,
        'LAST_NAME' => true,
        'EMAIL' => true,
        'PHONE_INTEGER' => true,
        'HIRE_DATE' => true,
        'JOB_ID' => true,
        'SALARY' => true,
        'COMMISSION_PCT' => true,
        'MANAGER_ID' => true,
        'DEPARTMENT_ID' => true,
    ];
}
