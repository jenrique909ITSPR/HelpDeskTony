<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PositiontypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PositiontypesTable Test Case
 */
class PositiontypesTableTest extends TestCase
{

    /**
     * Test subject     *
     * @var \App\Model\Table\PositiontypesTable     */
    public $Positiontypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.positiontypes',
        'app.positiontypebranches',
        'app.branches',
        'app.branchgroups',
        'app.users',
        'app.positionbranches',
        'app.positions',
        'app.itemcodes',
        'app.items',
        'app.itemcategories',
        'app.layoutcategories',
        'app.layouts',
        'app.currencies',
        'app.brands',
        'app.itemtypes',
        'app.stockmoves_details',
        'app.stockmoves',
        'app.warehouses',
        'app.stocks',
        'app.movereasons',
        'app.movereasontemplates',
        'app.shippers',
        'app.invoices',
        'app.suppliers',
        'app.statusitems',
        'app.tickets',
        'app.tickettypes',
        'app.ticketstatuses',
        'app.ticketstatuses_tickettypes',
        'app.ticket_statuses',
        'app.sources',
        'app.userautors',
        'app.statususers',
        'app.groups',
        'app.ticketlogs',
        'app.roles',
        'app.articles',
        'app.articlefiles',
        'app.articles_roles',
        'app.hdcategories',
        'app.hdtemplate',
        'app.hdcategories_articles',
        'app.ticketmarkeds',
        'app.ticketnotes',
        'app.ticketnotestypes',
        'app.userendmessages',
        'app.userrequerieds',
        'app.ticketimpacts',
        'app.ticketurgencies',
        'app.ticketpriorities',
        'app.positiontypebranches_items'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Positiontypes') ? [] : ['className' => PositiontypesTable::class];        $this->Positiontypes = TableRegistry::get('Positiontypes', $config);    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Positiontypes);

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
