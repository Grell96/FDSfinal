<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LocationsFixture
 */
class LocationsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'LOCATION_ID' => ['type' => 'float', 'length' => 4, 'precision' => 0, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'STREET_ADDRESS' => ['type' => 'string', 'length' => 40, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '', 'precision' => null],
        'POSTAL_CODE' => ['type' => 'string', 'length' => 12, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '', 'precision' => null],
        'CITY' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '', 'precision' => null],
        'STATE_PROVINCE' => ['type' => 'string', 'length' => 25, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '', 'precision' => null],
        'COUNTRY_ID' => ['type' => 'char', 'length' => 2, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'LOC_CITY_IX' => ['type' => 'index', 'columns' => ['CITY'], 'length' => []],
            'LOC_STATE_PROVINCE_IX' => ['type' => 'index', 'columns' => ['STATE_PROVINCE'], 'length' => []],
            'LOC_COUNTRY_IX' => ['type' => 'index', 'columns' => ['COUNTRY_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['LOCATION_ID'], 'length' => []],
            'LOC_ID_PK' => ['type' => 'unique', 'columns' => ['LOCATION_ID'], 'length' => []],
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
                'LOCATION_ID' => 1,
                'STREET_ADDRESS' => 'Lorem ipsum dolor sit amet',
                'POSTAL_CODE' => 'Lorem ipsu',
                'CITY' => 'Lorem ipsum dolor sit amet',
                'STATE_PROVINCE' => 'Lorem ipsum dolor sit a',
                'COUNTRY_ID' => '',
            ],
        ];
        parent::init();
    }
}
