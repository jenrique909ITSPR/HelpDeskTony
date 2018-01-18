<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ItemcodesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ItemcodesTable Test Case
 */
class ItemcodesTableTest extends TestCase
{

    /**
     * Test subject     *
     * @var \App\Model\Table\ItemcodesTable     */
    public $Itemcodes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.itemcodes',
        'app.items',
        'app.itemcategories',
        'app.layoutcategories',
        'app.currencies',
        'app.brands',
        'app.itemtypes',
        'app.stockmoves_details',
        'app.stockmoves',
        'app.warehouses',
        'app.branches',
        'app.branchgroups',
        'app.users',
        'app.positionbranches',
        'app.statususers',
        'app.groups',
        'app.ticketlogs',
        'app.tickets',
        'app.tickettypes',
        'app.ticketstatuses',
        'app.ticketstatuses_tickettypes',
        'app.ticket_statuses',
        'app.sources',
        'app.userautors',
        'app.roles',
        'app.articles',
        'app.articlefiles',
        'app.articles_roles',
        'app.hdcategories',
        'app.hdtemplate',
        'app.hdcategories_articles',
        'app.movereasontemplates',
        'app.movereasons',
        'app.ticketmarkeds',
        'app.ticketnotes',
        'app.ticketnotestypes',
        'app.userendmessages',
        'app.userrequerieds',
        'app.ticketimpacts',
        'app.ticketurgencies',
        'app.ticketpriorities',
        'app.layouts',
        'app.stocks',
        'app.shippers',
        'app.invoices',
        'app.suppliers',
        'app.statusitems'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Itemcodes') ? [] : ['className' => ItemcodesTable::class];        $this->Itemcodes = TableRegistry::get('Itemcodes', $config);    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Itemcodes);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
