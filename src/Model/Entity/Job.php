<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Job Entity
 *
 * @property string|null $JOB_ID
 * @property string|null $JOB_TITLE
 * @property float|null $MIN_SALARY
 * @property float|null $MAX_SALARY
 */
class Job extends Entity
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
        'JOB_ID' => true,
        'JOB_TITLE' => true,
        'MIN_SALARY' => true,
        'MAX_SALARY' => true,
    ];
}
