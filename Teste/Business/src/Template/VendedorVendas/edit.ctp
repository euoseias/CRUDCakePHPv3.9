<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VendedorVenda $vendedorVenda
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $vendedorVenda->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $vendedorVenda->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar vendedor'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Vendas'), ['controller' => 'Vendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nova Venda'), ['controller' => 'Vendas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vendedorVendas form large-9 medium-8 columns content">
    <?= $this->Form->create($vendedorVenda) ?>
    <fieldset>
        <legend><?= __('Editar Vendedor') ?></legend>
        <?php
            echo $this->Form->control('nome_do_vendedor');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Sslvar')) ?>
    <?= $this->Form->end() ?>
</div>
