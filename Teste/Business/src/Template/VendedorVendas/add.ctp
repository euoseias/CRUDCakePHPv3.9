<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VendedorVenda $vendedorVenda
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Listar vendedor'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Vendas'), ['controller' => 'Vendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Cadastra venda'), ['controller' => 'Vendas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vendedorVendas form large-9 medium-8 columns content">
    <?= $this->Form->create($vendedorVenda) ?>
    <fieldset>
        <legend><?= __('Cadastra vendedor') ?></legend>
        <?php
            echo $this->Form->control('nome_do_vendedor');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Cadastra')) ?>
    <?= $this->Form->end() ?>
</div>
