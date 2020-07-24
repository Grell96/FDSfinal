<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JobHistoryTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JobHistoryTable Test Case
 */
class JobHistoryTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\JobHistoryTable
     */
    protected $JobHistory;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.JobHistory',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('JobHistory') ? [] : ['className' => JobHistoryTable::class];
        $this->JobHistory = TableRegistry::getTableLocator()->get('JobHistory', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->JobHistory);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
