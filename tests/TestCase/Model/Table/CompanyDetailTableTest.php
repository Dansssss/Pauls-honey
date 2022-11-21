<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompanyDetailTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompanyDetailTable Test Case
 */
class CompanyDetailTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CompanyDetailTable
     */
    protected $CompanyDetail;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.CompanyDetail',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CompanyDetail') ? [] : ['className' => CompanyDetailTable::class];
        $this->CompanyDetail = $this->getTableLocator()->get('CompanyDetail', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->CompanyDetail);

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
