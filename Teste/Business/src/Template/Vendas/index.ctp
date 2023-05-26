<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venda[]|\Cake\Collection\CollectionInterface $vendas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Nova Venda'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar vendedor'), ['controller' => 'VendedorVendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Cadastra vendedor'), ['controller' => 'VendedorVendas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar comprador'), ['controller' => 'CompradorVendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Cadastra comprador'), ['controller' => 'CompradorVendas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vendas index large-9 medium-8 columns content">
    <h3><?= __('Vendas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Vendedor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Comprador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nome do item') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Unidade de medida') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Quantidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Preço') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Produto Perecivel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Data Validade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Data Fabricacao') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vendas as $venda): ?>
            <tr>
                <td><?= $this->Number->format($venda->id) ?></td>
                <td><?= $venda->has('vendedor_venda','nome_do_vendedor') ? $this->Html->link($venda->vendedor_venda->id, ['controller' => 'VendedorVendas', 'action' => 'view', $venda->vendedor_venda->id]) : '' ?></td>
                <td><?= $venda->has('comprador_venda') ? $this->Html->link($venda->comprador_venda->id, ['controller' => 'CompradorVendas', 'action' => 'view', $venda->comprador_venda->id]) : '' ?></td>
                <td><?= h($venda->nome_do_item) ?></td>
                <td><?= $this->Number->format($venda->unidade_de_medida) ?></td>
                <td><?= $this->Number->format($venda->quantidade) ?></td>
                <td><?= $this->Number->format($venda->preco) ?></td>
                <td><?= h($venda->produto_perecivel) ?></td>
                <td><?= h($venda->data_validade) ?></td>
                <td><?= h($venda->data_fabricacao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $venda->id]) ?>
                    <?= $this->Html->link(__('Edita'), ['action' => 'edit', $venda->id]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $venda->id], ['confirm' => __('Tem certeza de que deseja excluir o registro {0}?', $venda->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
