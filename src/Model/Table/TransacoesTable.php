<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Transacoes Model
 *
 * @method \App\Model\Entity\Transaco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Transaco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Transaco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Transaco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Transaco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Transaco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Transaco findOrCreate($search, callable $callback = null, $options = [])
 */
class TransacoesTable extends Table
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

        $this->setTable('transacoes');
        $this->setDisplayField('idTransacao');
        $this->setPrimaryKey('idTransacao');
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
            ->integer('idTransacao')
            ->allowEmpty('idTransacao', 'create');

        $validator
            ->integer('idConta')
            ->requirePresence('idConta', 'create')
            ->notEmpty('idConta');

        $validator
            ->decimal('valor')
            ->allowEmpty('valor');

        $validator
            ->dateTime('dataTransacao')
            ->requirePresence('dataTransacao', 'create')
            ->notEmpty('dataTransacao');

        return $validator;
    }
}
