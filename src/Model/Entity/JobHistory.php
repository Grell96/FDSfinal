<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * JobHistory Entity
 *
 * @property float|null $EMPLOYEE_ID
 * @property \Cake\I18n\FrozenDate|null $START_DATE
 * @property \Cake\I18n\FrozenDate|null $END_DATE
 * @property string|null $JOB_ID
 * @property float|null $DEPARTMENT_ID
 */
class JobHistory extends Entity
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
        'EMPLOYEE_ID' => true,
        'START_DATE' => true,
        'END_DATE' => true,
        'JOB_ID' => true,
        'DEPARTMENT_ID' => true,
    ];
}
