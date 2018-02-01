<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Invoices Model
 *
 * @property \App\Model\Table\SuppliersTable|\Cake\ORM\Association\BelongsTo $Suppliers
 * @property \App\Model\Table\ItemcodesTable|\Cake\ORM\Association\HasMany $Itemcodes
 *
 * @method \App\Model\Entity\Invoice get($primaryKey, $options = [])
 * @method \App\Model\Entity\Invoice newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Invoice[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Invoice|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Invoice patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Invoice[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Invoice findOrCreate($search, callable $callback = null, $options = [])
 */
class InvoicesTable extends Table
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

        $this->setTable('V_ValesCompraTI_Fact');
        $this->setDisplayField('Factura');
        $this->setPrimaryKey('Factura');

        $this->belongsTo('Branches', [
            'foreignKey' => 'Sucursal',
            'strategy' => 'select'
        ]);
        $this->belongsTo('Purchaseorders', [
            'foreignKey' => 'CveVale',
            'strategy' => 'select'
        ]);
        $this->hasMany('Itemcodes', [
            'foreignKey' => 'invoice_id'
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
       /* $validator
            ->integer('id')
            ->allowempty('id', 'create');

        $validator
            ->scalar('number')
            ->allowempty('number');

        $validator
            ->scalar('pdf')
            ->allowempty('pdf');

        $validator
            ->scalar('xml')
            ->allowempty('xml');

        $validator
            ->scalar('purchase_order')
            ->allowempty('purchase_order');*/

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
     //   $rules->add($rules->existsIn(['supplier_id'], 'Suppliers'));

        return $rules;
    }
      public static function defaultConnectionName() {
        return 'modelSQL';
    }
}
