<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RegionsFixture
 */
class RegionsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'REGION_ID' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'REGION_NAME' => ['type' => 'string', 'length' => 25, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['REGION_NAME'], 'length' => []],
            'REG_ID_PK' => ['type' => 'unique', 'columns' => ['REGION_ID'], 'length' => []],
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
                'REGION_ID' => 1,
                'REGION_NAME' => 'd5f41ef1-0269-454e-a6b5-41da3b5a7fba',
            ],
        ];
        parent::init();
    }
}
