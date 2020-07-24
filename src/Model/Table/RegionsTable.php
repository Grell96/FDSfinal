<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Regions Model
 *
 * @method \App\Model\Entity\Region newEmptyEntity()
 * @method \App\Model\Entity\Region newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Region[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Region get($primaryKey, $options = [])
 * @method \App\Model\Entity\Region findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Region patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Region[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Region|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Region saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Region[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Region[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Region[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Region[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class RegionsTable extends Table
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

        $this->setTable('regions');
        $this->setDisplayField('REGION_NAME');
        $this->setPrimaryKey('REGION_NAME');
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
            ->integer('REGION_ID')
            ->requirePresence('REGION_ID', 'create')
            ->notEmptyString('REGION_ID')
            ->add('REGION_ID', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('REGION_NAME')
            ->maxLength('REGION_NAME', 25)
            ->allowEmptyString('REGION_NAME', null, 'create');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['REGION_ID']));

        return $rules;
    }
}
