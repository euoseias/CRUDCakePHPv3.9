<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompradoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompradoresTable Test Case
 */
class CompradoresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CompradoresTable
     */
    public $Compradores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Compradores',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Compradores') ? [] : ['className' => CompradoresTable::class];
        $this->Compradores = TableRegistry::getTableLocator()->get('Compradores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Compradores);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
