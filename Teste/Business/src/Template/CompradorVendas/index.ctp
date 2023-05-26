<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CompradorVenda[]|\Cake\Collection\CollectionInterface $compradorVendas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Cadastra comprador'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista vendas'), ['controller' => 'Vendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nova venda'), ['controller' => 'Vendas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="compradorVendas index large-9 medium-8 columns content">
    <h3><?= __('Comprador') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_do_comprador') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($compradorVendas as $compradorVenda): ?>
            <tr>
                <td><?= $this->Number->format($compradorVenda->id) ?></td>
                <td><?= h($compradorVenda->nome_do_comprador) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $compradorVenda->id]) ?>
                    <?= $this->Html->link(__('Edita'), ['action' => 'edit', $compradorVenda->id]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $compradorVenda->id], ['confirm' => __('Tem certeza de que deseja excluir o registro {0}?', $compradorVenda->id)]) ?>
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
