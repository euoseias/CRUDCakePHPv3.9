<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VendedorVendasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VendedorVendasTable Test Case
 */
class VendedorVendasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VendedorVendasTable
     */
    public $VendedorVendas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.VendedorVendas',
        'app.Vendas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('VendedorVendas') ? [] : ['className' => VendedorVendasTable::class];
        $this->VendedorVendas = TableRegistry::getTableLocator()->get('VendedorVendas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->VendedorVendas);

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
