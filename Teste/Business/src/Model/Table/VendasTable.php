<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\I18n\FrozenTime;

/**
 * Vendas Model
 *
 * @property \App\Model\Table\VendedorVendasTable&\Cake\ORM\Association\BelongsTo $VendedorVendas
 * @property \App\Model\Table\CompradorVendasTable&\Cake\ORM\Association\BelongsTo $CompradorVendas
 *
 * @method \App\Model\Entity\Venda get($primaryKey, $options = [])
 * @method \App\Model\Entity\Venda newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Venda[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Venda|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Venda saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Venda patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Venda[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Venda findOrCreate($search, callable $callback = null, $options = [])
 */
class VendasTable extends Table
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

        $this->setTable('vendas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('VendedorVendas', [
            'foreignKey' => 'vendedor_venda_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('CompradorVendas', [
            'foreignKey' => 'comprador_venda_id',
            'joinType' => 'INNER',
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
            ->scalar('nome_do_item')
            ->maxLength('nome_do_item', 50)
            ->requirePresence('nome_do_item', 'create')
            ->notEmptyString('nome_do_item');

        $validator
            ->numeric('unidade_de_medida')
            ->requirePresence('unidade_de_medida', 'create')
            ->notEmptyString('unidade_de_medida');

        $validator
            ->integer('quantidade')
            ->requirePresence('quantidade', 'create')
            ->notEmptyString('quantidade');

        $validator
            ->numeric('preco')
            ->requirePresence('preco', 'create')
            ->notEmptyString('preco');

        $validator
            ->boolean('produto_perecivel')
            ->requirePresence('produto_perecivel', 'create')
            ->notEmptyString('produto_perecivel');

        $validator
            ->date('data_validade')
            ->requirePresence('data_validade', 'create')
            ->notEmptyDate('data_validade');


        $validator
            ->date('data_fabricacao')
            ->requirePresence('data_fabricacao', 'create')
            ->notEmptyDate('data_fabricacao');

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
        $rules->add($rules->existsIn(['vendedor_venda_id'], 'VendedorVendas'));
        $rules->add($rules->existsIn(['comprador_venda_id'], 'CompradorVendas'));

        return $rules;
    }
    
}
