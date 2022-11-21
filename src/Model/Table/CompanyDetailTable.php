<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CompanyDetail Model
 *
 * @method \App\Model\Entity\CompanyDetail newEmptyEntity()
 * @method \App\Model\Entity\CompanyDetail newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CompanyDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CompanyDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\CompanyDetail findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CompanyDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CompanyDetail[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CompanyDetail|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CompanyDetail saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CompanyDetail[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CompanyDetail[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CompanyDetail[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CompanyDetail[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CompanyDetailTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('company_detail');
        $this->setDisplayField('name');
        $this->setPrimaryKey('name');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 64)
            ->allowEmptyString('name', null, 'create');

        $validator
            ->scalar('address')
            ->maxLength('address', 100)
            ->requirePresence('address', 'create')
            ->notEmptyString('address');

        $validator
            ->date('established_time')
            ->requirePresence('established_time', 'create')
            ->notEmptyDate('established_time');

        $validator
            ->scalar('business_scope')
            ->maxLength('business_scope', 100)
            ->requirePresence('business_scope', 'create')
            ->notEmptyString('business_scope');

        return $validator;
    }
}
