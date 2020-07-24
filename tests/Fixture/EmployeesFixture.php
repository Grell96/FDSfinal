<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmployeesFixture
 */
class EmployeesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'EMPLOYEE_ID' => ['type' => 'float', 'length' => 6, 'precision' => 0, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'FIRST_NAME' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '', 'precision' => null],
        'LAST_NAME' => ['type' => 'string', 'length' => 25, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '', 'precision' => null],
        'EMAIL' => ['type' => 'string', 'length' => 25, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '', 'precision' => null],
        'PHONE_INTEGER' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '', 'precision' => null],
        'HIRE_DATE' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'JOB_ID' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '', 'precision' => null],
        'SALARY' => ['type' => 'float', 'length' => 8, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'COMMISSION_PCT' => ['type' => 'float', 'length' => 2, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'MANAGER_ID' => ['type' => 'float', 'length' => 6, 'precision' => 0, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'DEPARTMENT_ID' => ['type' => 'float', 'length' => 4, 'precision' => 0, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        '_indexes' => [
            'EMP_DEPARTMENT_IX' => ['type' => 'index', 'columns' => ['DEPARTMENT_ID'], 'length' => []],
            'EMP_JOB_IX' => ['type' => 'index', 'columns' => ['JOB_ID'], 'length' => []],
            'EMP_MANAGER_IX' => ['type' => 'index', 'columns' => ['MANAGER_ID'], 'length' => []],
            'EMP_NAME_IX' => ['type' => 'index', 'columns' => ['LAST_NAME', 'FIRST_NAME'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['EMPLOYEE_ID'], 'length' => []],
            'EMP_EMP_ID_PK' => ['type' => 'unique', 'columns' => ['EMPLOYEE_ID'], 'length' => []],
            'EMP_EMAIL_UK' => ['type' => 'unique', 'columns' => ['EMAIL'], 'length' => []],
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
                'FIRST_NAME' => 'Lorem ipsum dolor ',
                'LAST_NAME' => 'Lorem ipsum dolor sit a',
                'EMAIL' => 'Lorem ipsum dolor sit a',
                'PHONE_INTEGER' => 'Lorem ipsum dolor ',
                'HIRE_DATE' => '2020-07-24',
                'JOB_ID' => 'Lorem ip',
                'SALARY' => 1,
                'COMMISSION_PCT' => 1,
                'MANAGER_ID' => 1,
                'DEPARTMENT_ID' => 1,
            ],
        ];
        parent::init();
    }
}
