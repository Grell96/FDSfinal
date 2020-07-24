<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CountriesFixture
 */
class CountriesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'COUNTRY_ID' => ['type' => 'char', 'length' => 2, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '', 'precision' => null],
        'COUNTRY_NAME' => ['type' => 'string', 'length' => 40, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '', 'precision' => null],
        'REGION_ID' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'region' => ['type' => 'index', 'columns' => ['REGION_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['COUNTRY_ID'], 'length' => []],
            'COUNTRY_C_ID_PK' => ['type' => 'unique', 'columns' => ['COUNTRY_ID'], 'length' => []],
            'region' => ['type' => 'foreign', 'columns' => ['REGION_ID'], 'references' => ['regions', 'REGION_ID'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
                'COUNTRY_ID' => '',
                'COUNTRY_NAME' => 'Lorem ipsum dolor sit amet',
                'REGION_ID' => 1,
            ],
        ];
        parent::init();
    }
}
