<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VendedoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VendedoresTable Test Case
 */
class VendedoresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VendedoresTable
     */
    public $Vendedores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Vendedores',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Vendedores') ? [] : ['className' => VendedoresTable::class];
        $this->Vendedores = TableRegistry::getTableLocator()->get('Vendedores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Vendedores);

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
