<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tickets Model
 *
 * @property \App\Model\Table\TickettypesTable|\Cake\ORM\Association\BelongsTo $Tickettypes
 * @property \App\Model\Table\TicketstatusesTable|\Cake\ORM\Association\BelongsTo $TicketStatuses
 * @property \App\Model\Table\SourcesTable|\Cake\ORM\Association\BelongsTo $Sources
 * @property \App\Model\Table\ItemcodesTable|\Cake\ORM\Association\BelongsTo $Itemcodes
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\GroupsTable|\Cake\ORM\Association\BelongsTo $Groups
 * @property \App\Model\Table\TicketimpactsTable|\Cake\ORM\Association\BelongsTo $Ticketimpacts
 * @property \App\Model\Table\TicketurgenciesTable|\Cake\ORM\Association\BelongsTo $Ticketurgencies
 * @property \App\Model\Table\TicketprioritiesTable|\Cake\ORM\Association\BelongsTo $Ticketpriorities
 * @property \App\Model\Table\TicketsTable|\Cake\ORM\Association\BelongsTo $ParentTickets
 * @property \App\Model\Table\HdcategoriesTable|\Cake\ORM\Association\BelongsTo $Hdcategories
 * @property |\Cake\ORM\Association\BelongsTo $Branches
 * @property \App\Model\Table\TicketlogsTable|\Cake\ORM\Association\HasMany $Ticketlogs
 * @property \App\Model\Table\TicketmarkedsTable|\Cake\ORM\Association\HasMany $Ticketmarkeds
 * @property \App\Model\Table\TicketnotesTable|\Cake\ORM\Association\HasMany $Ticketnotes
 * @property \App\Model\Table\TicketsTable|\Cake\ORM\Association\HasMany $ChildTickets
 *
 * @method \App\Model\Entity\Ticket get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ticket newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ticket[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ticket|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ticket patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ticket[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ticket findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */class TicketsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('tickets');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Tickettypes', [
            'foreignKey' => 'tickettype_id'
        ]);
        $this->belongsTo('TicketStatuses', [
            'foreignKey' => 'ticket_status_id'
        ]);
        $this->belongsTo('Sources', [
            'foreignKey' => 'source_id'
        ]);
        $this->belongsTo('Itemcodes', [
            'foreignKey' => 'itemcode_id'
        ]);

         $this->belongsTo('Users', [
            'className' => 'Users',
            'foreignKey' => 'user_id',
            'propertyName' => 'user',
        ]);

        $this->belongsTo('Userautors', [
            'className' => 'Users',
            'foreignKey' => 'user_autor',
            'propertyName' => 'userautor',
        ]);
        $this->belongsTo('Userrequerieds', [
            'className' => 'Users',
            'foreignKey' => 'user_requeried',
            'propertyName' => 'userrequeried',
        ]);

        $this->belongsTo('Groups', [
            'foreignKey' => 'group_id'
        ]);
        $this->belongsTo('Ticketimpacts', [
            'foreignKey' => 'ticketimpact_id'
        ]);
        $this->belongsTo('Ticketurgencies', [
            'foreignKey' => 'ticketurgency_id'
        ]);
        $this->belongsTo('Ticketpriorities', [
            'foreignKey' => 'ticketpriority_id'
        ]);
        $this->belongsTo('ParentTickets', [
            'className' => 'Tickets',
            'foreignKey' => 'parent_id'
        ]);
        $this->belongsTo('Hdcategories', [
            'foreignKey' => 'hdcategory_id'
        ]);

        $this->belongsTo('Branches', [
            'foreignKey' => 'branch_id',
            'joinType' => 'left',
            'strategy' => 'select'
        ]);
        $this->hasMany('Ticketlogs', [
            'foreignKey' => 'ticket_id'
        ]);
        $this->hasMany('Ticketmarkeds', [
            'foreignKey' => 'ticket_id'
        ]);
        $this->hasMany('Ticketnotes', [
            'foreignKey' => 'ticket_id'
        ]);
        $this->hasMany('Stockmoves', [
            'foreignKey' => 'ticket_id'
        ]);
        $this->hasMany('ChildTickets', [
            'className' => 'Tickets',
            'foreignKey' => 'parent_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')            ->allowEmpty('id', 'create');
        $validator
            ->scalar('title')            ->allowEmpty('title');
        $validator
            ->scalar('solution')            ->allowEmpty('solution');
        $validator
            ->scalar('resolution')            ->allowEmpty('resolution');
        $validator
            ->scalar('ip')            ->requirePresence('ip', 'create')            ->notEmpty('ip');
        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['tickettype_id'], 'Tickettypes'));
        $rules->add($rules->existsIn(['ticket_status_id'], 'TicketStatuses'));
        //$rules->add($rules->existsIn(['source_id'], 'Sources'));
        $rules->add($rules->existsIn(['itemcode_id'], 'Itemcodes'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['user_requeried'], 'Users'));
        $rules->add($rules->existsIn(['user_autor'], 'Users'));
        $rules->add($rules->existsIn(['group_id'], 'Groups'));
        $rules->add($rules->existsIn(['ticketimpact_id'], 'Ticketimpacts'));
        $rules->add($rules->existsIn(['ticketurgency_id'], 'Ticketurgencies'));
        $rules->add($rules->existsIn(['ticketpriority_id'], 'Ticketpriorities'));
        $rules->add($rules->existsIn(['parent_id'], 'ParentTickets'));
        $rules->add($rules->existsIn(['hdcategory_id'], 'Hdcategories'));
        $rules->add($rules->existsIn(['branch_id'], 'Branches'));

        return $rules;
    }
}
