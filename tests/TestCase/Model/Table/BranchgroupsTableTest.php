<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BranchgroupsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BranchgroupsTable Test Case
 */
class BranchgroupsTableTest extends TestCase
{

    /**
     * Test subject     *
     * @var \App\Model\Table\BranchgroupsTable     */
    public $Branchgroups;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.branchgroups',
        'app.users',
        'app.positionbranches',
        'app.branches',
        'app.layouts',
        'app.positions',
        'app.layoutcategories',
        'app.itemcategories',
        'app.items',
        'app.currencies',
        'app.brands',
        'app.itemcodes',
        'app.invoices',
        'app.suppliers',
        'app.statusitems',
        'app.stockmoves_details',
        'app.stockmoves',
        'app.warehouses',
        'app.stocks',
        'app.movereasons',
        'app.movereasontemplates',
        'app.shippers',
        'app.tickets',
        'app.tickettypes',
        'app.ticket_statuses',
        'app.sources',
        'app.groups',
        'app.ticketlogs',
        'app.ticketimpacts',
        'app.ticketurgencies',
        'app.ticketpriorities',
        'app.hdcategories',
        'app.articles',
        'app.articlefiles',
        'app.roles',
        'app.articles_roles',
        'app.hdtemplate',
        'app.internalnotes',
        'app.publicnotes',
        'app.ticketmarkeds',
        'app.ticketsfiles',
        'app.statususers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Branchgroups') ? [] : ['className' => BranchgroupsTable::class];        $this->Branchgroups = TableRegistry::get('Branchgroups', $config);    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Branchgroups);

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
