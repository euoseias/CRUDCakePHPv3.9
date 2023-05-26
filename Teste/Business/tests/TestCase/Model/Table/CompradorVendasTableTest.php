<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompradorVendasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompradorVendasTable Test Case
 */
class CompradorVendasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CompradorVendasTable
     */
    public $CompradorVendas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CompradorVendas',
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
        $config = TableRegistry::getTableLocator()->exists('CompradorVendas') ? [] : ['className' => CompradorVendasTable::class];
        $this->CompradorVendas = TableRegistry::getTableLocator()->get('CompradorVendas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CompradorVendas);

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
