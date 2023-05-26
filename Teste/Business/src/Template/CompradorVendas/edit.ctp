<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CompradorVenda $compradorVenda
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $compradorVenda->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $compradorVenda->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista comprador'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista vendas'), ['controller' => 'Vendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nova venda'), ['controller' => 'Vendas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="compradorVendas form large-9 medium-8 columns content">
    <?= $this->Form->create($compradorVenda) ?>
    <fieldset>
        <legend><?= __('Editar comprador') ?></legend>
        <?php
            echo $this->Form->control('nome_do_comprador');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
