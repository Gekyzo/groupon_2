<?php

declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PromotionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PromotionsTable Test Case
 */
class PromotionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PromotionsTable
     */
    protected $Promotions;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Promotions',
        'app.Categories',
        'app.Orders',
        'app.Images',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Promotions') ? [] : ['className' => PromotionsTable::class];
        $this->Promotions = TableRegistry::getTableLocator()->get('Promotions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Promotions);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
