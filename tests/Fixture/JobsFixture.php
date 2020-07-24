<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * JobsFixture
 */
class JobsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'JOB_ID' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '', 'precision' => null],
        'JOB_TITLE' => ['type' => 'string', 'length' => 35, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '', 'precision' => null],
        'MIN_SALARY' => ['type' => 'float', 'length' => 6, 'precision' => 0, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'MAX_SALARY' => ['type' => 'float', 'length' => 6, 'precision' => 0, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['JOB_ID'], 'length' => []],
            'JOB_ID_PK' => ['type' => 'unique', 'columns' => ['JOB_ID'], 'length' => []],
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
                'JOB_ID' => 'aaaad94b-ebde-44a0-b19c-859c82be4228',
                'JOB_TITLE' => 'Lorem ipsum dolor sit amet',
                'MIN_SALARY' => 1,
                'MAX_SALARY' => 1,
            ],
        ];
        parent::init();
    }
}
