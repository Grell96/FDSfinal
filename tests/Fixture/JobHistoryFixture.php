<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * JobHistoryFixture
 */
class JobHistoryFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'job_history';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'EMPLOYEE_ID' => ['type' => 'float', 'length' => 6, 'precision' => 0, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'START_DATE' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'END_DATE' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'JOB_ID' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '', 'precision' => null],
        'DEPARTMENT_ID' => ['type' => 'float', 'length' => 4, 'precision' => 0, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        '_indexes' => [
            'JHIST_JOB_IX' => ['type' => 'index', 'columns' => ['JOB_ID'], 'length' => []],
            'JHIST_EMPLOYEE_IX' => ['type' => 'index', 'columns' => ['EMPLOYEE_ID'], 'length' => []],
            'JHIST_DEPARTMENT_IX' => ['type' => 'index', 'columns' => ['DEPARTMENT_ID'], 'length' => []],
        ],
        '_constraints' => [
            'JHIST_EMP_ID_ST_DATE_PK' => ['type' => 'unique', 'columns' => ['EMPLOYEE_ID', 'START_DATE'], 'length' => []],
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
                'EMPLOYEE_ID' => 1,
                'START_DATE' => '2020-07-24',
                'END_DATE' => '2020-07-24',
                'JOB_ID' => 'Lorem ip',
                'DEPARTMENT_ID' => 1,
            ],
        ];
        parent::init();
    }
}
