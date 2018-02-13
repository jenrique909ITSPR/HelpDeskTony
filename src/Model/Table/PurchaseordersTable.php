<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class PurchaseordersTable extends Table
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

        $this->setTable('V_ValesCompraTI');
        $this->setDisplayField('Justificacion');
        $this->setPrimaryKey('CveVale');
        
        $this->belongsTo('Companies', [
            'foreignKey' => 'Cia',
            'strategy' => 'select'
        ]);
       
        $this->belongsTo('Branches', [
            'className' => 'Branches',
            'foreignKey' => 'Sucursal',
            'propertyName' => 'branch',
            'strategy' => 'select'
        ]);

        $this->belongsTo('Branchrequests', [
            'className' => 'Branches',
            'foreignKey' => 'Suc_Solicita',
            'propertyName' => 'branchrequest',
            'strategy' => 'select'
        ]);
        $this->belongsTo('Departments', [
            'className' => 'Departments',
            'foreignKey' => 'Depto_Solicita',
            'propertyName' => 'department',
            'strategy' => 'select'
        ]);
        $this->belongsTo('Departmentrequires', [
            'className' => 'Departments',
            'foreignKey' => 'Depto_Requerido',
            'propertyName' => 'departmentrequire',
            'strategy' => 'select'
        ]);
        $this->belongsTo('Suppliers', [
            'foreignKey' => 'Proveedor',
            'strategy' => 'select'
        ]);
        $this->hasMany('Purchasedescriptions', [
            'foreignKey' => 'CveVale',
            'strategy' => 'select'
        ]);
        
       $this->hasMany('Invoices', [
            'foreignKey' => 'id',
            'strategy' => 'select'
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
            ->integer('CveVale')            ->allowEmpty('SUCURSAL', 'create');
        $validator
            ->scalar('Justificacion')            ->allowEmpty('Justificacion');
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
        //$rules->add($rules->existsIn(['Cia'], 'Branchgroups'));

        return $rules;
    }


    public static function defaultConnectionName() {
        return 'modelSQL';
    }
}
