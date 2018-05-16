<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contas Model
 *
 * @method \App\Model\Entity\Conta get($primaryKey, $options = [])
 * @method \App\Model\Entity\Conta newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Conta[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Conta|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Conta patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Conta[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Conta findOrCreate($search, callable $callback = null, $options = [])
 */
class ContasTable extends Table
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

        $this->setTable('contas');
        $this->setDisplayField('idConta');
        $this->setPrimaryKey('idConta');
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
            ->integer('idConta')
            ->allowEmpty('idConta', 'create');

        $validator
            ->integer('idPessoa')
            ->requirePresence('idPessoa', 'create')
            ->notEmpty('idPessoa');

        $validator
            ->decimal('saldo')
            ->requirePresence('saldo', 'create')
            ->notEmpty('saldo');

        $validator
            ->decimal('limiteSaqueDiario')
            ->requirePresence('limiteSaqueDiario', 'create')
            ->notEmpty('limiteSaqueDiario');

        $validator
            ->boolean('flagAtivo')
            ->requirePresence('flagAtivo', 'create')
            ->notEmpty('flagAtivo');

        $validator
            ->integer('tipoConta')
            ->requirePresence('tipoConta', 'create')
            ->notEmpty('tipoConta');

        $validator
            ->dateTime('dataCriacao')
            ->requirePresence('dataCriacao', 'create')
            ->notEmpty('dataCriacao');

        return $validator;
    }
}
