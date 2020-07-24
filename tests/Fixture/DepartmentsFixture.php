<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DepartmentsFixture
 */
class DepartmentsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'DEPARTMENT_ID' => ['type' => 'float', 'length' => 4, 'precision' => 0, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'DEPARTMENT_NAME' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '', 'precision' => null],
        'MANAGER_ID' => ['type' => 'float', 'length' => 6, 'precision' => 0, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'LOCATION_ID' => ['type' => 'float', 'length' => 4, 'precision' => 0, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        '_indexes' => [
            'DEPT_LOCATION_IX' => ['type' => 'index', 'columns' => ['LOCATION_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['DEPARTMENT_ID'], 'length' => []],
            'DEPT_ID_PK' => ['type' => 'unique', 'columns' => ['DEPARTMENT_ID'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_0900_ai_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'DEPARTMENT_ID' => 1,
                'DEPARTMENT_NAME' => 'Lorem ipsum dolor sit amet',
                'MANAGER_ID' => 1,
                'LOCATION_ID' => 1,
            ],
        ];
        parent::init();
    }
}
