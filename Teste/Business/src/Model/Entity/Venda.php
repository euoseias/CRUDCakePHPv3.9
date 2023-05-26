<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Venda Entity
 *
 * @property int $id
 * @property int $vendedor_venda_id
 * @property int $comprador_venda_id
 * @property string $nome_do_item
 * @property float $unidade_de_medida
 * @property int $quantidade
 * @property float $preco
 * @property bool $produto_perecivel
 * @property \Cake\I18n\FrozenDate $data_validade
 * @property \Cake\I18n\FrozenDate $data_fabricacao
 *
 * @property \App\Model\Entity\VendedorVenda $vendedor_venda
 * @property \App\Model\Entity\CompradorVenda $comprador_venda
 */
class Venda extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'vendedor_venda_id' => true,
        'comprador_venda_id' => true,
        'nome_do_item' => true,
        'unidade_de_medida' => true,
        'quantidade' => true,
        'preco' => true,
        'produto_perecivel' => true,
        'data_validade' => true,
        'data_fabricacao' => true,
        'vendedor_venda' => true,
        'comprador_venda' => true,
    ];
}
