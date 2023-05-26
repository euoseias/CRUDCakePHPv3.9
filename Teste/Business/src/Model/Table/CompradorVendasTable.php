<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CompradorVendas Model
 *
 * @property \App\Model\Table\VendasTable&\Cake\ORM\Association\HasMany $Vendas
 *
 * @method \App\Model\Entity\CompradorVenda get($primaryKey, $options = [])
 * @method \App\Model\Entity\CompradorVenda newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CompradorVenda[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CompradorVenda|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CompradorVenda saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CompradorVenda patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CompradorVenda[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CompradorVenda findOrCreate($search, callable $callback = null, $options = [])
 */
class CompradorVendasTable extends Table
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

        $this->setTable('comprador_vendas');
        $this->setDisplayField('nome_do_comprador');
        $this->setPrimaryKey('id');

        $this->hasMany('Vendas', [
            'foreignKey' => 'comprador_venda_id',
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nome_do_comprador')
            ->maxLength('nome_do_comprador', 100)
            ->requirePresence('nome_do_comprador', 'create')
            ->notEmptyString('nome_do_comprador');

        return $validator;
    }
}
